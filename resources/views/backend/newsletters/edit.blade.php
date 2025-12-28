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
                                        <label for="template_name" class="form-label">Template Name <span class="text-danger">*</span></label>
                                        <input type="text" id="template_name" name="template_name" class="form-control" placeholder="Template name (required)" value="Holiday Template">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Available Variables</label>
                                        <div class="small text-muted"><code>{{name}}</code>, <code>{{order_history}}</code>, <code>{{unsubscribe_link}}</code></div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Builder</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="btn-group-vertical w-100" role="group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="text">Text</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="image">Image</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="cta">CTA Button</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary" data-comp="divider">Divider</button>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div id="builder-canvas" style="min-height:200px;background:#f8f9fa;padding:1rem">Loading components…</div>
                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="components_json" name="components_json" value='[{"type":"text","content":"Seasonal message"}]'>

                                <div class="mb-3">
                                    <label for="cta_text" class="form-label">Default CTA Button Text</label>
                                    <input type="text" id="cta_text" name="cta_text" class="form-control" value="Shop Now">
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
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" id="start_date" name="start_date" class="form-control" value="2024-12-01">
                                    </div>

                                    <div class="mb-3 col-md-3">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" id="end_date" name="end_date" class="form-control" value="2025-01-01">
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
                                    <button type="button" id="create-campaign-from-template" class="btn btn-outline-primary">Create Campaign</button>

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

                            <!-- Create Campaign Modal (from template) -->
                            <div class="modal fade" id="createCampaignModalEdit" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Create Campaign from Template</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="create-campaign-form-edit">
                                                <div class="mb-3">
                                                    <label class="form-label">Campaign Name</label>
                                                    <input id="campaign_name_edit" class="form-control" placeholder="E.g., Holiday Blast">
                                                </div>

                                                <div class="mb-3 row">
                                                    <div class="col-md-6">
                                                        <label class="form-label">Target Audience</label>
                                                        <select id="campaign_audience_edit" class="form-select">
                                                            <option value="all">All Users</option>
                                                            <option value="new">New Customers</option>
                                                            <option value="vip">VIP</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="form-label">Schedule Send</label>
                                                        <input id="campaign_schedule_edit" type="datetime-local" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="small text-muted">Demo: this will simulate a campaign creation.</div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                            <button id="create-campaign-edit" class="btn btn-primary">Create Campaign</button>
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
                                (function(){
                                    let components = JSON.parse(document.getElementById('components_json').value || '[]');

                                    function renderBuilder(){
                                        const canvas = document.getElementById('builder-canvas');
                                        canvas.innerHTML = '';
                                        if (!components.length) { canvas.innerHTML = '<div class="text-muted">No components yet. Add from the left.</div>'; return; }
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

                                    // preview and send test reuse code from create
                                    document.getElementById('preview-template')?.addEventListener('click', function(){
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

                                    // Create campaign from this template
                                    document.getElementById('create-campaign-from-template')?.addEventListener('click', function(){
                                        const tplName = document.getElementById('template_name').value || 'Template';
                                        document.getElementById('campaign_name_edit').value = tplName + ' - Campaign';
                                        if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                            new bootstrap.Modal(document.getElementById('createCampaignModalEdit')).show();
                                        }
                                    });

                                    document.getElementById('create-campaign-edit')?.addEventListener('click', function(){
                                        const name = document.getElementById('campaign_name_edit').value || 'Untitled Campaign';
                                        const aud = document.getElementById('campaign_audience_edit').value;
                                        const sched = document.getElementById('campaign_schedule_edit').value;
                                        alert('Created campaign "' + name + '" (demo). Audience: ' + aud + '. Scheduled: ' + (sched || 'Immediate'));
                                        if (typeof bootstrap !== 'undefined' && typeof bootstrap.Modal === 'function') {
                                            bootstrap.Modal.getInstance(document.getElementById('createCampaignModalEdit')).hide();
                                        }
                                    });

                                    document.getElementById('template-form')?.addEventListener('submit', function(e){
                                        document.getElementById('components_json').value = JSON.stringify(components);
                                    });

                                    renderBuilder();
                                })();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
