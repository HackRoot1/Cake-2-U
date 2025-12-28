@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Edit</strong> Banner</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('banner.index') }}" class="btn btn-secondary">Back to banners</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Banner</h5>
                            <h6 class="card-subtitle text-muted">Update banner content, scheduling, audience and publish state.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data" id="banner-edit-form">
                                <!-- Static demo - no backend changes -->

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Banner Image <span class="text-danger">*</span></label>
                                        <div class="d-flex align-items-center gap-3 flex-column flex-sm-row">
                                            <div id="edit-image-previews" class="d-flex gap-2 flex-wrap align-items-center">
                                                <img id="edit-image-preview" src="/img/placeholder-150x80.png" alt="Homepage Hero" class="img-fluid mb-2 mb-sm-0" style="width:180px;height:90px;object-fit:cover;border-radius:4px;border:1px solid #e9ecef;" />
                                            </div>
                                            <div class="w-100">
                                                <input type="file" id="edit-images" name="images[]" class="form-control" accept="image/*" multiple>
                                                <div class="small text-muted mt-1">Current image shown. Upload one or more to change. Accepted: jpg, png. Max 5MB each.</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="alt_text" class="form-label">Alt Text <span class="text-danger">*</span></label>
                                        <input type="text" id="alt_text" name="alt_text" class="form-control" value="Homepage hero showing featured promo" required>

                                        <label for="title" class="form-label mt-3">Banner Title</label>
                                        <input type="text" id="title" name="title" class="form-control" value="Homepage Hero - Festive Sale">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <div class="mb-2">
                                        <div class="btn-group mb-2" role="group" aria-label="rich text toolbar">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="bold"><b>B</b></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="italic"><i>I</i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="insertUnorderedList">• List</button>
                                        </div>
                                        <div id="description-editor" contenteditable="true" class="form-control" style="min-height:120px;border:1px solid #ced4da;border-radius:0.25rem;"></div>
                                        <textarea id="description" name="description" class="d-none">Large hero banner for holiday sale.</textarea>
                                    </div>
                                </div> 

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="link" class="form-label">Target Link (URL)</label>
                                        <input type="url" id="link" name="link" class="form-control" value="https://example.com/sale">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="cta_text" class="form-label">CTA Button Text</label>
                                        <input type="text" id="cta_text" name="cta_text" class="form-control" value="Shop Now">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-3">
                                        <label for="display_order" class="form-label">Display Order</label>
                                        <input type="number" id="display_order" name="display_order" class="form-control" value="1">
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="display_location" class="form-label">Display Location</label>
                                        <select id="display_location" name="display_location" class="form-select">
                                            <option value="home" selected>Home page</option>
                                            <option value="category">Category page</option>
                                            <option value="seasonal">Seasonal promotion</option>
                                            <option value="flash">Flash sale</option>
                                            <option value="newsletter">Newsletter</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="draft">Draft</option>
                                            <option value="published" selected>Published</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="display_order_note" class="form-label">&nbsp;</label>
                                        <div class="small text-muted">Schedule and expiry below</div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="start_date" class="form-label">Publish Date/Time</label>
                                        <input type="datetime-local" id="start_date" name="start_date" class="form-control" value="2024-12-01T00:00">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="end_date" class="form-label">Expiry Date/Time</label>
                                        <input type="datetime-local" id="end_date" name="end_date" class="form-control" value="2025-01-01T00:00">
                                    </div>
                                </div> 

                                <div class="mb-3">
                                    <label for="audience" class="form-label">Target Audience</label>
                                    <select id="audience" name="audience" class="form-select w-auto">
                                        <option value="all" selected>All Users</option>
                                        <option value="new">New Customers</option>
                                        <option value="vip">VIP</option>
                                    </select>
                                </div>

                                <div class="d-flex gap-2 flex-column flex-sm-row">
                                    <button type="button" id="edit-preview-btn" class="btn btn-outline-secondary">Preview</button>
                                    <button type="submit" name="save" value="save" class="btn btn-primary">Update Banner</button>

                                    <form onsubmit="return confirm('Delete banner and its impressions? This action cannot be undone.')" class="ms-2">
                                        <button type="submit" class="btn btn-outline-danger">Delete Banner</button>
                                    </form>

                                    <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>

                            <!-- Preview Modal (reuse) -->
                            <div class="modal fade" id="bannerPreviewModalEdit" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Banner Preview</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img id="preview-image-large-edit" src="/img/placeholder-600x300.png" alt="preview" class="img-fluid mb-3" style="max-height:320px;object-fit:cover;border-radius:4px;">
                                            <h4 id="preview-title-edit" class="mb-2">Homepage Hero - Festive Sale</h4>
                                            <p id="preview-description-edit" class="text-muted">Large hero banner for holiday sale.</p>
                                            <a href="#" id="preview-cta-edit" class="btn btn-primary">Shop Now</a>
                                            <div class="small text-muted mt-2" id="preview-dates-edit">2024-12-01 → 2025-01-01</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                @media (max-width: 575.98px) {
                                    .card-body .d-flex.flex-column > .btn, .card-body .d-flex.flex-column > a { width: 100%; }
                                    #edit-image-preview { width:100% !important; height:auto !important; }
                                }
                            </style>

                            <script>
                                // edit page - handle multiple images
                                function clearEditImagePreviews() {
                                    const container = document.getElementById('edit-image-previews');
                                    container.innerHTML = '<img id="edit-image-preview" src="/img/placeholder-150x80.png" alt="Homepage Hero" class="img-fluid mb-2 mb-sm-0" style="width:180px;height:90px;object-fit:cover;border-radius:4px;border:1px solid #e9ecef;" />';
                                }

                                document.getElementById('edit-images')?.addEventListener('change', function(e) {
                                    const files = Array.from(e.target.files || []);
                                    clearEditImagePreviews();
                                    if (files.length === 0) return;
                                    files.forEach((file, idx) => {
                                        const reader = new FileReader();
                                        reader.onload = function(ev) {
                                            if (idx === 0) {
                                                document.getElementById('edit-image-preview').src = ev.target.result;
                                                document.getElementById('preview-image-large-edit').src = ev.target.result;
                                            }
                                            const img = document.createElement('img');
                                            img.src = ev.target.result;
                                            img.alt = file.name;
                                            img.style.width = '100px';
                                            img.style.height = '56px';
                                            img.style.objectFit = 'cover';
                                            img.className = 'rounded';
                                            img.onclick = function() { document.getElementById('preview-image-large-edit').src = ev.target.result; };
                                            document.getElementById('edit-image-previews').appendChild(img);
                                        }
                                        reader.readAsDataURL(file);
                                    });
                                });

                                // init editor with existing content
                                document.addEventListener('DOMContentLoaded', function() {
                                    const descVal = document.getElementById('description').value || '';
                                    document.getElementById('description-editor').innerHTML = descVal;

                                    document.querySelectorAll('[data-cmd]').forEach(btn => btn.addEventListener('click', function() {
                                        const cmd = btn.getAttribute('data-cmd');
                                        document.execCommand(cmd, false, null);
                                    }));
                                });

                                document.getElementById('edit-preview-btn')?.addEventListener('click', function() {
                                    const title = document.getElementById('title').value;
                                    const descriptionHtml = document.getElementById('description-editor').innerHTML;
                                    const cta = document.getElementById('cta_text').value;
                                    const imgAlt = document.getElementById('alt_text').value;
                                    const start = document.getElementById('start_date').value;
                                    const end = document.getElementById('end_date').value;

                                    if (!imgAlt) return alert('Alt text is required for accessibility.');

                                    document.getElementById('preview-title-edit').textContent = title || '';
                                    document.getElementById('preview-description-edit').innerHTML = descriptionHtml || '';
                                    const previewCta = document.getElementById('preview-cta-edit');
                                    if (cta) { previewCta.textContent = cta; previewCta.classList.remove('d-none'); } else { previewCta.classList.add('d-none'); }
                                    document.getElementById('preview-dates-edit').textContent = (start || '—') + (end ? (' → ' + end) : '');

                                    if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                        new bootstrap.Modal(document.getElementById('bannerPreviewModalEdit')).show();
                                    } else {
                                        alert('Preview:\n' + (title ? title + '\n' : '') + (descriptionHtml ? descriptionHtml.replace(/<[^>]*>/g, '') + '\n' : ''));
                                    }
                                });

                                document.getElementById('banner-edit-form')?.addEventListener('submit', function(e) {
                                    // sync editor to textarea
                                    document.getElementById('description').value = document.getElementById('description-editor').innerHTML;

                                    const alt = document.getElementById('alt_text');
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
