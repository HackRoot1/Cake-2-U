@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Reviews</strong> Management</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('admin.reviews.settings') }}" class="btn btn-outline-secondary">Settings</a>
                </div>
            </div>

            {{-- Dummy data array for UI-only --}}
            @php
                $reviews = [
                    [
                        'id' => 1,
                        'product' => 'Wireless Headphones',
                        'product_img' => '/img/placeholder-150x150.png',
                        'reviewer' => 'Alice Nguyen',
                        'rating' => 5,
                        'title' => 'Amazing sound!',
                        'text' =>
                            'These headphones have incredible sound and battery life. The noise cancellation works well and it is very comfortable to wear for long periods.',
                        'status' => 'Pending',
                        'date' => '2025-12-20',
                        'helpful' => 12,
                    ],
                    [
                        'id' => 2,
                        'product' => 'Smart Watch Pro',
                        'product_img' => '/img/placeholder-150x150.png',
                        'reviewer' => 'John Doe',
                        'rating' => 4,
                        'title' => 'Great features',
                        'text' =>
                            'The watch has many useful features and good battery life but the band could be better.',
                        'status' => 'Approved',
                        'date' => '2025-12-18',
                        'helpful' => 8,
                    ],
                    [
                        'id' => 3,
                        'product' => 'Portable Charger 20k',
                        'product_img' => '/img/placeholder-150x150.png',
                        'reviewer' => 'Sara Park',
                        'rating' => 2,
                        'title' => 'Not as advertised',
                        'text' => 'It didn\'t charge my phone fully on some devices and I had issues with the cable.',
                        'status' => 'Rejected',
                        'date' => '2025-12-15',
                        'helpful' => 1,
                    ],
                ];
            @endphp

            <div class="card">
                <div class="card-body">
                    <form class="row g-2 align-items-center mb-3" id="reviews-controls">
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-text">🔍</span>
                                <input name="q" class="form-control" placeholder="Search product or reviewer"
                                    aria-label="Search reviews">
                                <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <select id="status-filter" class="form-select">
                                <option value="">All status</option>
                                <option value="Pending">Pending</option>
                                <option value="Approved">Approved</option>
                                <option value="Rejected">Rejected</option>
                            </select>
                        </div>

                        <div class="col-md-2">
                            <select id="rating-filter" class="form-select">
                                <option value="">Any rating</option>
                                <option value="5">5 stars</option>
                                <option value="4">4 stars</option>
                                <option value="3">3 stars</option>
                                <option value="2">2 stars</option>
                                <option value="1">1 star</option>
                            </select>
                        </div>

                        <div class="col-md-3 text-end d-flex justify-content-end gap-2">
                            <select id="sort" class="form-select w-auto">
                                <option value="newest">Newest</option>
                                <option value="oldest">Oldest</option>
                                <option value="rating_desc">Rating (High → Low)</option>
                                <option value="helpful_desc">Helpful votes</option>
                            </select>

                            <select id="per-page" class="form-select w-auto">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>

                        </div>
                    </form>

                    <div class="d-flex mb-2 gap-2 align-items-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="select-all">
                            <label class="form-check-label small" for="select-all">Select All</label>
                        </div>

                        <select id="bulk-action" class="form-select w-auto">
                            <option value="">Bulk actions</option>
                            <option value="approve">Approve</option>
                            <option value="reject">Reject</option>
                            <option value="delete">Delete</option>
                            <option value="respond">Respond</option>
                        </select>

                        <button id="apply-bulk" class="btn btn-primary">Apply</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Reviewer</th>
                                    <th>Rating</th>
                                    <th>Title</th>
                                    <th>Review</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th class="text-end">Helpful</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reviews as $r)
                                    <tr>
                                        <td><input type="checkbox" class="row-checkbox" value="{{ $r['id'] }}"></td>
                                        <td class="d-flex align-items-center gap-2">
                                            <img src="{{ $r['product_img'] }}" alt="product" class="rounded"
                                                style="width:48px;height:48px;object-fit:cover;">
                                            <div><strong>{{ $r['product'] }}</strong></div>
                                        </td>
                                        <td>{{ $r['reviewer'] }}</td>
                                        <td>
                                            @component('components.admin.star-rating', ['rating' => $r['rating']])
                                            @endcomponent
                                        </td>
                                        <td>{{ $r['title'] }}</td>
                                        <td>
                                            <div class="review-text" data-full="{{ $r['text'] }}">
                                                {{ Illuminate\Support\Str::limit($r['text'], 80) }}
                                                @if (strlen($r['text']) > 80)
                                                    <a href="#" class="read-more">Read more</a>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if ($r['status'] === 'Approved')
                                                <x-admin.badge type="success">Approved</x-admin.badge>
                                            @elseif ($r['status'] === 'Pending')
                                                <x-admin.badge type="warning">Pending</x-admin.badge>
                                            @else
                                                <x-admin.badge type="danger">Rejected</x-admin.badge>
                                            @endif
                                        </td>
                                        <td>{{ $r['date'] }}</td>
                                        <td class="text-end">{{ $r['helpful'] }}</td>
                                        <td class="text-end">
                                            <div class="btn-group">
                                                <a href="{{ route('admin.reviews.show', ['id' => $r['id']]) }}"
                                                    class="btn btn-sm btn-outline-secondary">View</a>
                                                <button class="btn btn-sm btn-success approve-btn"
                                                    data-id="{{ $r['id'] }}">Approve</button>
                                                <button class="btn btn-sm btn-warning reject-btn"
                                                    data-id="{{ $r['id'] }}">Reject</button>
                                                <button class="btn btn-sm btn-danger delete-btn"
                                                    data-id="{{ $r['id'] }}">Delete</button>
                                                <button class="btn btn-sm btn-outline-primary respond-btn"
                                                    data-id="{{ $r['id'] }}">Respond</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3 d-flex justify-content-between align-items-center">
                        <div class="small text-muted">Showing 1-{{ count($reviews) }} of {{ count($reviews) }} reviews
                        </div>
                        <nav>
                            <ul class="pagination mb-0">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>

            {{-- Approve modal --}}
            @component('components.admin.modal-confirm', [
                'id' => 'approveModal',
                'title' => 'Approve Review',
                'confirmText' => 'Approve',
            ])
                <div>
                    <p>Are you sure you want to approve the selected review(s)?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="notify-approve">
                        <label class="form-check-label small" for="notify-approve">Notify reviewer</label>
                    </div>
                    {{-- In real app: submit form or AJAX to server --}}
                </div>
            @endcomponent

            {{-- Reject modal (needs reason + notes) --}}
            <div class="modal fade" id="rejectModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Reject Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Reason</label>
                                <select class="form-select" id="reject-reason">
                                    <option>Inappropriate content</option>
                                    <option>Spam</option>
                                    <option>Offensive language</option>
                                    <option>Competitor review</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Notes (optional)</label>
                                <textarea class="form-control" rows="3" id="reject-notes"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="notify-reject">
                                <label class="form-check-label small" for="notify-reject">Notify reviewer</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-warning">Reject</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Bulk respond modal (UI-only) --}}
            <div class="modal fade" id="bulkRespondModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Respond to selected reviews</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Choose template</label>
                                <select class="form-select" id="response-template">
                                    <option value="Thanks for your review!">Thanks for your review!</option>
                                    <option value="We\'re sorry to hear that. Please contact support.">We're sorry to hear
                                        that. Please contact support.</option>
                                    <option value="We\'re glad you loved it! Use code THANKS10 for 10% off.">We're glad you
                                        loved it! Use code THANKS10 for 10% off.</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Customize (optional)</label>
                                <textarea class="form-control" rows="3" id="bulk-response-custom"></textarea>
                            </div>

                            <div class="small text-muted">Preview will show the combined template + custom text.</div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary" id="bulk-respond-send">Send Responses</button>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                /* small helpers for reviews page */
                .review-text .read-more {
                    margin-left: 8px;
                }
            </style>

            <script>
                // UI-only interactions
                document.getElementById('select-all')?.addEventListener('change', function(e) {
                    const checked = e.target.checked;
                    document.querySelectorAll('.row-checkbox').forEach(cb => cb.checked = checked);
                });

                document.querySelectorAll('.read-more').forEach(a => a.addEventListener('click', function(e) {
                    e.preventDefault();
                    const full = this.closest('.review-text').dataset.full;
                    // simple preview dialog (replace with modal in future)
                    alert(full);
                }));

                document.getElementById('apply-bulk')?.addEventListener('click', function() {
                    const action = document.getElementById('bulk-action').value;
                    const selected = Array.from(document.querySelectorAll('.row-checkbox')).filter(cb => cb.checked).map(
                        cb => cb.value);
                    if (!action) return alert('Select a bulk action.');
                    if (selected.length === 0) return alert('Select at least one review.');
                    if (action === 'approve') {
                        // show approve modal
                        new bootstrap.Modal(document.getElementById('approveModal')).show();
                    } else if (action === 'reject') {
                        new bootstrap.Modal(document.getElementById('rejectModal')).show();
                    } else if (action === 'delete') {
                        if (confirm('Delete ' + selected.length + ' review(s)?')) {
                            alert('Deleted (UI-only)');
                        }
                    } else if (action === 'respond') {
                        // open bulk respond modal
                        const modal = new bootstrap.Modal(document.getElementById('bulkRespondModal'));
                        // reset template/custom
                        document.getElementById('response-template').selectedIndex = 0;
                        document.getElementById('bulk-response-custom').value = '';
                        modal.show();
                    }
                });

                // per-row buttons
                document.querySelectorAll('.approve-btn').forEach(b => b.addEventListener('click', function() {
                    new bootstrap.Modal(document.getElementById('approveModal')).show();
                }));
                document.querySelectorAll('.reject-btn').forEach(b => b.addEventListener('click', function() {
                    new bootstrap.Modal(document.getElementById('rejectModal')).show();
                }));
                document.querySelectorAll('.delete-btn').forEach(b => b.addEventListener('click', function() {
                    if (confirm('Delete this review?')) alert('Deleted (UI-only)');
                }));
                document.querySelectorAll('.respond-btn').forEach(b => b.addEventListener('click', function() {
                    alert('Open respond composer (UI-only)');
                }));

                // bulk respond send
                document.getElementById('bulk-respond-send')?.addEventListener('click', function() {
                    const template = document.getElementById('response-template').value;
                    const custom = document.getElementById('bulk-response-custom').value;
                    const msg = template + (custom ? '\n\n' + custom : '');
                    // In a real app: send via AJAX
                    alert('Responses sent (UI-only):\n' + msg);
                    new bootstrap.Modal(document.getElementById('bulkRespondModal')).hide();
                });
            </script>

        </div>
    </main>
@endsection

