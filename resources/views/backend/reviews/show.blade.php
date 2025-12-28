@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.reviews.index') }}">Reviews</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Review #{{ $reviewId ?? 'N/A' }}</li>
                        </ol>
                    </nav>
                    <h3><strong>Review</strong> Detail</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary me-2">Back to list</a>
                    <div class="btn-group">
                        <button class="btn btn-success" id="approve-single">Approve</button>
                        <button class="btn btn-warning" id="reject-single">Reject</button>
                        <button class="btn btn-outline-danger" id="delete-single">Delete</button>
                        <button class="btn btn-outline-primary" id="respond-single">Respond</button>
                    </div>
                </div>
            </div>

            {{-- Dummy review details for UI-only --}}
            @php
                $review = [
                    'id' => $reviewId ?? 1,
                    'product' => 'Wireless Headphones',
                    'product_img' => '/img/placeholder-600x300.png',
                    'reviewer' => 'Alice Nguyen',
                    'reviewer_avatar' => '/img/placeholder-150x150.png',
                    'rating' => 5,
                    'title' => 'Amazing sound!',
                    'text' => "These headphones have incredible sound and battery life. The noise cancellation works well and it is very comfortable to wear for long periods. I used them on a 10-hour flight and the battery lasted.",
                    'status' => 'Pending',
                    'date' => '2025-12-20',
                    'helpful' => 12,
                    'verified' => true,
                ];

                // Dummy admin responses
                $responses = [
                    ['id'=>1, 'author'=> 'Admin', 'text' => 'Thanks for the feedback! Glad you\'re enjoying it.', 'date' => '2025-12-21'],
                ];
            @endphp

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="{{ $review['product_img'] }}" alt="{{ $review['product'] }}" class="rounded img-fluid" style="width:100%;height:200px;object-fit:cover;">

                            <h5 class="mt-3 mb-0">{{ $review['product'] }}</h5>
                            <div class="small text-muted">Review ID: <strong>#{{ $review['id'] }}</strong></div>

                            <div class="mb-3 mt-2">
                                @if($review['verified']) <span class="badge bg-info text-dark">Verified Purchase</span> @endif
                                <span class="ms-2 small text-muted">Status: <strong>{{ $review['status'] }}</strong></span>
                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-success">Approve</button>
                                <button class="btn btn-outline-danger">Delete</button>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Reviewer</strong>
                                <div class="d-flex align-items-center gap-2 mt-2">
                                    <img src="{{ $review['reviewer_avatar'] }}" alt="avatar" class="rounded-circle" style="width:48px;height:48px;object-fit:cover;">
                                    <div>
                                        <div><strong>{{ $review['reviewer'] }}</strong></div>
                                        <div class="small text-muted">Posted: {{ $review['date'] }}</div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Rating</strong>
                                <div class="mt-1">@component('components.admin.star-rating', ['rating' => $review['rating']])@endcomponent</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Helpful votes</strong>
                                <div class="small text-muted mt-1">{{ $review['helpful'] }} people found this helpful</div>
                            </li>
                        </ul>
                    </div>

                    {{-- Admin response list (editable) --}}
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Responses</h5>
                        </div>
                        <div class="card-body">
                            @forelse($responses as $resp)
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <div><strong>{{ $resp['author'] }}</strong> <span class="small text-muted">{{ $resp['date'] }}</span></div>
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </div>
                                    <div class="small text-muted mt-1">{{ $resp['text'] }}</div>
                                </div>
                            @empty
                                <div class="small text-muted">No responses yet.</div>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h4 class="mb-1">{{ $review['title'] }}</h4>
                            <div class="small text-muted mb-2">By <strong>{{ $review['reviewer'] }}</strong> • {{ $review['date'] }}</div>

                            <div class="mb-3">@component('components.admin.star-rating', ['rating' => $review['rating']])@endcomponent</div>

                            <p class="mb-3">{{ $review['text'] }}</p>

                            <div class="d-flex gap-2">
                                <button class="btn btn-success">Approve</button>
                                <button class="btn btn-warning">Reject</button>
                                <button class="btn btn-outline-danger">Delete</button>
                                <button class="btn btn-outline-primary" id="respond-open">Respond</button>
                            </div>
                        </div>
                    </div>

                    {{-- Response composer (UI-only) --}}
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Post an admin response</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label">Response</label>
                                <textarea id="admin-response" class="form-control" rows="4" placeholder="Write a response..."></textarea>
                            </div>

                            <div class="mb-3">
                                <button id="preview-response" class="btn btn-outline-secondary">Preview</button>
                                <button id="post-response" class="btn btn-primary">Post response</button>
                            </div>

                            <div id="response-preview" class="border rounded p-3 d-none">
                                <strong>Preview</strong>
                                <div id="response-preview-content" class="mt-2 small text-muted"></div>
                            </div>

                            <script>
                                document.getElementById('preview-response')?.addEventListener('click', function() {
                                    const content = document.getElementById('admin-response').value;
                                    if (!content) return alert('Write a response to preview.');
                                    document.getElementById('response-preview-content').textContent = content;
                                    document.getElementById('response-preview').classList.remove('d-none');
                                });

                                document.getElementById('post-response')?.addEventListener('click', function() {
                                    const content = document.getElementById('admin-response').value;
                                    if (!content) return alert('Write a response before posting.');
                                    alert('Response posted (UI-only): ' + content);
                                });

                                document.getElementById('respond-open')?.addEventListener('click', function() {
                                    document.getElementById('admin-response').focus();
                                });

                                document.getElementById('approve-single')?.addEventListener('click', function() { new bootstrap.Modal(document.getElementById('approveModal')).show(); });
                                document.getElementById('reject-single')?.addEventListener('click', function() { new bootstrap.Modal(document.getElementById('rejectModal')).show(); });
                                document.getElementById('delete-single')?.addEventListener('click', function() { if (confirm('Delete this review?')) alert('Deleted (UI-only)'); });
                                document.getElementById('respond-single')?.addEventListener('click', function() { document.getElementById('admin-response').focus(); });
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Reuse the same modals included in index for approve/reject; component exists --}}

            @component('components.admin.modal-confirm', ['id' => 'approveModal', 'title' => 'Approve Review', 'confirmText' => 'Approve'])
                <div>
                    <p>Are you sure you want to approve this review?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="notify-approve-single">
                        <label class="form-check-label small" for="notify-approve-single">Notify reviewer</label>
                    </div>
                </div>
            @endcomponent

            <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reject Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Reason</label>
                                <select class="form-select" id="reject-reason-single">
                                    <option>Inappropriate content</option>
                                    <option>Spam</option>
                                    <option>Offensive language</option>
                                    <option>Competitor review</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes (optional)</label>
                                <textarea class="form-control" rows="3" id="reject-notes-single"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="notify-reject-single">
                                <label class="form-check-label small" for="notify-reject-single">Notify reviewer</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-warning">Reject</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
