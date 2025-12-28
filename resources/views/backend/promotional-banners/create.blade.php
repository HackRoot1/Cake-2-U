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
                                            <div id="image-previews" class="d-flex gap-2 flex-wrap align-items-center">
                                                <img id="image-preview" src="/img/placeholder-150x80.png" alt="preview" class="img-fluid mb-2 mb-sm-0" style="width:180px;height:90px;object-fit:cover;border-radius:4px;border:1px solid #e9ecef;" />
                                            </div>
                                            <div class="w-100">
                                                <input type="file" id="images" name="images[]" class="form-control" accept="image/*" multiple required>
                                                <div class="small text-muted mt-1">Accepted: jpg, png. Max 5MB each. Upload multiple images to rotate or pick a responsive variant.</div>
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
                                    <div class="mb-2">
                                        <div class="btn-group mb-2" role="group" aria-label="rich text toolbar">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="bold"><b>B</b></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="italic"><i>I</i></button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary" data-cmd="insertUnorderedList">• List</button>
                                        </div>
                                        <div id="description-editor" contenteditable="true" class="form-control" style="min-height:120px;border:1px solid #ced4da;border-radius:0.25rem;"></div>
                                        <textarea id="description" name="description" class="d-none"></textarea>
                                    </div>
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
                                        <label for="display_location" class="form-label">Display Location</label>
                                        <select id="display_location" name="display_location" class="form-select">
                                            <option value="home">Home page</option>
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
                                        <input type="datetime-local" id="start_date" name="start_date" class="form-control">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="end_date" class="form-label">Expiry Date/Time</label>
                                        <input type="datetime-local" id="end_date" name="end_date" class="form-control">
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
                                // multiple image previews
                                function clearImagePreviews() {
                                    const container = document.getElementById('image-previews');
                                    container.innerHTML = '<img id="image-preview" src="/img/placeholder-150x80.png" alt="preview" class="img-fluid mb-2 mb-sm-0" style="width:180px;height:90px;object-fit:cover;border-radius:4px;border:1px solid #e9ecef;" />';
                                }

                                document.getElementById('images')?.addEventListener('change', function(e) {
                                    const files = Array.from(e.target.files || []);
                                    clearImagePreviews();
                                    if (files.length === 0) return;
                                    files.forEach((file, idx) => {
                                        const reader = new FileReader();
                                        reader.onload = function(ev) {
                                            if (idx === 0) {
                                                document.getElementById('image-preview').src = ev.target.result;
                                                document.getElementById('preview-image-large').src = ev.target.result;
                                            }
                                            const img = document.createElement('img');
                                            img.src = ev.target.result;
                                            img.alt = file.name;
                                            img.style.width = '100px';
                                            img.style.height = '56px';
                                            img.style.objectFit = 'cover';
                                            img.className = 'rounded';
                                            img.onclick = function() { document.getElementById('preview-image-large').src = ev.target.result; };
                                            document.getElementById('image-previews').appendChild(img);
                                        }
                                        reader.readAsDataURL(file);
                                    });
                                });

                                // simple rich text toolbar
                                document.querySelectorAll('[data-cmd]').forEach(btn => btn.addEventListener('click', function() {
                                    const cmd = btn.getAttribute('data-cmd');
                                    document.execCommand(cmd, false, null);
                                }));

                                document.getElementById('preview-btn')?.addEventListener('click', function() {
                                    const title = document.getElementById('title').value;
                                    const descriptionHtml = document.getElementById('description-editor').innerHTML;
                                    const cta = document.getElementById('cta_text').value;
                                    const imgAlt = document.getElementById('alt_text').value;
                                    const start = document.getElementById('start_date').value;
                                    const end = document.getElementById('end_date').value;

                                    const imgInput = document.getElementById('images');
                                    if (!imgInput || imgInput.files.length === 0) return alert('Please select at least one banner image.');
                                    if (!imgAlt) return alert('Alt text is required for accessibility.');

                                    document.getElementById('preview-title').textContent = title || '';
                                    document.getElementById('preview-description').innerHTML = descriptionHtml || '';
                                    const previewCta = document.getElementById('preview-cta');
                                    if (cta) { previewCta.textContent = cta; previewCta.classList.remove('d-none'); } else { previewCta.classList.add('d-none'); }
                                    document.getElementById('preview-dates').textContent = (start || '—') + (end ? (' → ' + end) : '');

                                    if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                        new bootstrap.Modal(document.getElementById('bannerPreviewModal')).show();
                                    } else {
                                        alert('Preview:\n' + (title ? title + '\n' : '') + (descriptionHtml ? descriptionHtml.replace(/<[^>]*>/g, '') + '\n' : ''));
                                    }
                                });

                                document.getElementById('banner-form')?.addEventListener('submit', function(e) {
                                    // sync rich editor to textarea
                                    document.getElementById('description').value = document.getElementById('description-editor').innerHTML;

                                    const imgs = document.getElementById('images');
                                    const alt = document.getElementById('alt_text');
                                    if (!imgs || imgs.files.length === 0) { e.preventDefault(); alert('Banner image is required.'); return false; }
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
