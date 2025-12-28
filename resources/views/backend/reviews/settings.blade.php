@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Review</strong> Moderation Settings</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('admin.reviews.index') }}" class="btn btn-secondary">Back to reviews</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <form id="review-settings-form">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="auto-approve-verified" checked>
                                    <label class="form-check-label" for="auto-approve-verified">Auto-approve reviews from verified purchases</label>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="require-admin-approval" checked>
                                    <label class="form-check-label" for="require-admin-approval">Require admin approval before publishing</label>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="disable-out-of-stock">
                                    <label class="form-check-label" for="disable-out-of-stock">Disable reviews for out-of-stock products</label>
                                </div>

                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="profanity-filter" checked>
                                    <label class="form-check-label" for="profanity-filter">Profanity filter (auto-flag bad words)</label>
                                </div>

                                <div class="mt-3">
                                    <button type="button" class="btn btn-primary" id="save-settings">Save settings</button>
                                </div>

                                <div class="small text-muted mt-2">Note: This is a UI-only page. Settings will be persisted after backend integration.</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.getElementById('save-settings')?.addEventListener('click', function() {
                    // UI-only: show confirmation
                    alert('Settings saved (UI-only)');
                });
            </script>
        </div>
    </main>
@endsection
