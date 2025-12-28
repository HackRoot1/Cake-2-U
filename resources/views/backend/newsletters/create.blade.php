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
                            <form method="POST" action="#" enctype="multipart/form-data" id="template-form">
                                <!-- CSRF omitted intentionally for static demo -->

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="template_name" class="form-label">Template Name <span class="text-danger">*</span></label>
                                        <input type="text" id="template_name" name="template_name" class="form-control" placeholder="Template name (required)" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Available Variables</label>
                                        <div class="small text-muted">Click to insert into component when editing: <code>{{name}}</code>, <code>{{order_history}}</code>, <code>{{unsubscribe_link}}</code></div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">
                                                <strong>Components</strong>
                                            </div>
                                            <div class="card-body">
                                                <div class="btn-group-vertical w-100" role="group">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="text">Text</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="image">Image</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="cta">CTA Button</button>
                                                    <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="divider">Divider</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-3 small text-muted">Drag/drop not required for demo — click to add component and then edit it.</div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-between align-items-center">
                                                <strong>Builder</strong>
                                                <small class="text-muted">Click a component to edit, drag to reorder (demo)</small>
                                            </div>
                                            <div class="card-body" id="builder-canvas" style="min-height:200px;background:#f8f9fa">
                                                <div class="text-muted">No components yet. Add from the left.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="components_json" name="components_json" value="[]">

                                <div class="d-flex gap-2 flex-column flex-sm-row mt-3">
                                    <button type="button" id="preview-template" class="btn btn-outline-secondary">Preview Template</button>
                                    <button type="button" id="send-test" class="btn btn-outline-primary">Send Test</button>
                                    <button type="submit" name="save" value="draft" class="btn btn-secondary">Save Draft</button>
                                    <button type="submit" name="save" value="publish" class="btn btn-primary">Save &amp; Publish</button>
                                    <a href="{{ route('banner.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>

                            <!-- Template Preview Modal -->
                            <div class="modal fade" id="templatePreviewModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Template Preview</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" id="template-preview-body">
                                            <!-- Rendered HTML preview -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Test Send Modal -->
                            <div class="modal fade" id="testSendModal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Send Test Email</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="test_email" class="form-label">Recipient Email</label>
                                                <input id="test_email" type="email" class="form-control" placeholder="you@example.com">
                                            </div>
                                            <div class="small text-muted">Demo: this will show a simulated send result.</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" id="confirm-send-test">Send</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <style>
                                #builder-canvas .component { padding:10px;border:1px dashed #ced4da;background:white;margin-bottom:8px;cursor:pointer }
                            </style>

                            <script>
                                (function(){
                                    let components = [];

                                    function renderBuilder(){
                                        const canvas = document.getElementById('builder-canvas');
                                        canvas.innerHTML = '';
                                        if (components.length === 0) { canvas.innerHTML = '<div class="text-muted">No components yet. Add from the left.</div>'; return; }
                                        components.forEach((c, i) => {
                                            const el = document.createElement('div');
                                            el.className = 'component';
                                            el.dataset.index = i;
                                            if (c.type === 'text') el.innerHTML = '<strong>Text:</strong> '+(c.content || '<em>(empty)</em>');
                                            if (c.type === 'image') el.innerHTML = '<strong>Image:</strong> '+(c.src || '<em>(no src)</em>');
                                            if (c.type === 'cta') el.innerHTML = '<strong>CTA:</strong> '+(c.text || 'Button');
                                            if (c.type === 'divider') el.innerHTML = '<hr>';
                                            el.addEventListener('click', () => editComponent(i));
                                            canvas.appendChild(el);
                                        });
                                        document.getElementById('components_json').value = JSON.stringify(components);
                                    }

                                    function addComponent(type){
                                        const base = { type };
                                        if (type === 'text') base.content = 'Editable text...';
                                        if (type === 'image') base.src = '/img/placeholder-600x300.png';
                                        if (type === 'cta') { base.text = 'Call to action'; base.href = '#'; }
                                        components.push(base);
                                        renderBuilder();
                                    }

                                    function editComponent(i){
                                        const c = components[i];
                                        const name = prompt('Edit component ('+c.type+')', c.content || c.src || c.text || '');
                                        if (name !== null) {
                                            if (c.type === 'text') c.content = name;
                                            if (c.type === 'image') c.src = name;
                                            if (c.type === 'cta') c.text = name;
                                            components[i] = c;
                                            renderBuilder();
                                        }
                                    }

                                    document.querySelectorAll('[data-comp]').forEach(btn => btn.addEventListener('click', function(){ addComponent(this.getAttribute('data-comp')) }));

                                    document.getElementById('preview-template').addEventListener('click', function(){
                                        // render preview
                                        const preview = document.getElementById('template-preview-body');
                                        preview.innerHTML = '';
                                        components.forEach(c => {
                                            if (c.type === 'text') preview.innerHTML += '<div style="margin-bottom:8px">'+c.content+'</div>';
                                            if (c.type === 'image') preview.innerHTML += '<div style="margin-bottom:8px"><img src="'+c.src+'" style="max-width:100%;height:auto"></div>';
                                            if (c.type === 'cta') preview.innerHTML += '<div style="margin-bottom:8px"><a class="btn btn-primary" href="'+(c.href||'#')+'">'+(c.text||'CTA')+'</a></div>';
                                            if (c.type === 'divider') preview.innerHTML += '<hr>';
                                        });
                                        if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                            new bootstrap.Modal(document.getElementById('templatePreviewModal')).show();
                                        } else alert('Preview generated');
                                    });

                                    document.getElementById('send-test')?.addEventListener('click', function(){
                                        if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                            new bootstrap.Modal(document.getElementById('testSendModal')).show();
                                        }
                                    });

                                    document.getElementById('confirm-send-test')?.addEventListener('click', function(){
                                        const email = document.getElementById('test_email').value;
                                        if (!email) return alert('Enter an email');
                                        alert('Simulated test send to ' + email + '.');
                                        if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                            bootstrap.Modal.getInstance(document.getElementById('testSendModal')).hide();
                                        }
                                    });

                                    // Ensure components_json is synced on submit
                                    document.getElementById('template-form')?.addEventListener('submit', function(e){
                                        document.getElementById('components_json').value = JSON.stringify(components);
                                    });

                                })();
                            </script>

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
