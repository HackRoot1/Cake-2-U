@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Create</strong> Banner</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('banner.index') }}" class="btn btn-secondary">Back to banners</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add New Banner</h5>
                            <h6 class="card-subtitle text-muted">Provide banner image, accessibility info and scheduling. Preview before publishing.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data" id="banner-form">
                                <!-- CSRF omitted intentionally for static demo -->

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Banner Image <span class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center gap-3 flex-column flex-sm-row">
                                            <img id="image-preview" src="/img/placeholder-150x80.png" alt="preview" class="img-fluid mb-2 mb-sm-0" style="width:180px;height:90px;object-fit:cover;border-radius:4px;border:1px solid #e9ecef;" />
                                            <div class="w-100">
                                                <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
                                                <div class="small text-muted mt-1">Accepted: jpg, png. Max 5MB</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="alt_text" class="form-label">Alt Text <span class="text-danger">*</span></label>
                                        <input type="text" id="alt_text" name="alt_text" class="form-control" placeholder="Describe the image for accessibility" required>

                                        <label for="title" class="form-label mt-3">Banner Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Optional title (for editors)">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control" rows="3" placeholder="Optional description or meta"></textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="link" class="form-label">Target Link (URL)</label>
                                        <input type="url" id="link" name="link" class="form-control" placeholder="https://example.com/promo">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="cta_text" class="form-label">CTA Button Text</label>
                                        <input type="text" id="cta_text" name="cta_text" class="form-control" placeholder="Shop now">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-3">
                                        <label for="display_order" class="form-label">Display Order</label>
                                        <input type="number" id="display_order" name="display_order" class="form-control" value="1">
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" id="start_date" name="start_date" class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="audience" class="form-label">Target Audience</label>
                                    <select id="audience" name="audience" class="form-select w-auto">
                                        <option value="all">All Users</option>
                                        <option value="new">New Customers</option>
                                        <option value="vip">VIP</option>
                                    </select>
                                </div>

                                <div class="d-flex gap-2 flex-column flex-sm-row">
                                    <button type="button" id="preview-btn" class="btn btn-outline-secondary">Preview</button>
                                    <button type="submit" name="save" value="draft" class="btn btn-secondary">Save Draft</button>
                                    <button type="submit" name="save" value="publish" class="btn btn-primary">Save &amp; Publish</button>
                                    <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>

                            <!-- Preview Modal -->
                            <div class="modal fade" id="bannerPreviewModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Banner Preview</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img id="preview-image-large" src="/img/placeholder-600x300.png" alt="preview" class="img-fluid mb-3" style="max-height:320px;object-fit:cover;border-radius:4px;">
                                            <h4 id="preview-title" class="mb-2"></h4>
                                            <p id="preview-description" class="text-muted"></p>
                                            <a href="#" id="preview-cta" class="btn btn-primary d-none" role="button"></a>
                                            <div class="small text-muted mt-2" id="preview-dates"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                @media (max-width: 575.98px) {
                                    /* ensure buttons stack nicely and previews scale */
                                    .card-body .d-flex.flex-column > .btn, .card-body .d-flex.flex-column > a { width: 100%; }
                                    #image-preview { width:100% !important; height:auto !important; }
                                }
                            </style>

                            <script>
                                document.getElementById('image')?.addEventListener('change', function(e) {
                                    const file = e.target.files && e.target.files[0];
                                    if (!file) return;
                                    const reader = new FileReader();
                                    reader.onload = function(ev) {
                                        document.getElementById('image-preview').src = ev.target.result;
                                        document.getElementById('preview-image-large').src = ev.target.result;
                                    }
                                    reader.readAsDataURL(file);
                                });

                                document.getElementById('preview-btn')?.addEventListener('click', function() {
                                    const title = document.getElementById('title').value;
                                    const description = document.getElementById('description').value;
                                    const cta = document.getElementById('cta_text').value;
                                    const imgAlt = document.getElementById('alt_text').value;
                                    const start = document.getElementById('start_date').value;
                                    const end = document.getElementById('end_date').value;

                                    if (!document.getElementById('image').value) return alert('Please select a banner image.');
                                    if (!imgAlt) return alert('Alt text is required for accessibility.');

                                    document.getElementById('preview-title').textContent = title || '';
                                    document.getElementById('preview-description').textContent = description || '';
                                    const previewCta = document.getElementById('preview-cta');
                                    if (cta) { previewCta.textContent = cta; previewCta.classList.remove('d-none'); } else { previewCta.classList.add('d-none'); }
                                    document.getElementById('preview-dates').textContent = (start || '—') + (end ? (' → ' + end) : '');

                                    // show bootstrap modal if available, else simple alert
                                    if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                        new bootstrap.Modal(document.getElementById('bannerPreviewModal')).show();
                                    } else {
                                        alert('Preview:\n' + (title ? title + '\n' : '') + (description ? description + '\n' : ''));
                                    }
                                });

                                document.getElementById('banner-form')?.addEventListener('submit', function(e) {
                                    const img = document.getElementById('image');
                                    const alt = document.getElementById('alt_text');
                                    if (!img.value) { e.preventDefault(); alert('Banner image is required.'); return false; }
                                    if (!alt.value) { e.preventDefault(); alert('Alt text is required for accessibility.'); return false; }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
