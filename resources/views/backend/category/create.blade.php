@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Create</strong> Category</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('category.index') }}" class="btn btn-secondary">Back to categories</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add New Category</h5>
                            <h6 class="card-subtitle text-muted">Fill in the details below to create a category (static demo).</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <!-- CSRF omitted intentionally for static demo -->

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="e.g., Chocolate" required oninput="document.getElementById('slug').value=this.value.toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'')">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="slug" class="form-label">Slug / URL</label>
                                        <input type="text" class="form-control" id="slug" placeholder="auto-generated" value="chocolate" readonly>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="parent" class="form-label">Parent Category</label>
                                        <select id="parent" class="form-select">
                                            <option value="">-- None (Top level) --</option>
                                            <option>🍰 Cakes</option>
                                            <option>🧁 Cupcakes</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="display_order" class="form-label">Display Order</label>
                                        <input type="number" id="display_order" class="form-control" value="1">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Category Description</label>
                                    <textarea id="description" class="form-control" rows="4" placeholder="Optional"></textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category Image (thumbnail)</label>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="https://placehold.co/150x150" alt="thumb" style="width:80px;height:80px;object-fit:cover;border-radius:4px;" />
                                            <div>
                                                <input type="file" class="form-control">
                                                <div class="small text-muted mt-1">Accepted: jpg, png. Max 2MB</div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" class="form-select">
                                            <option selected>Active</option>
                                            <option>Inactive</option>
                                        </select>

                                        <label for="meta_title" class="form-label mt-3">Meta Title</label>
                                        <input type="text" id="meta_title" class="form-control" placeholder="SEO title">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" rows="2" placeholder="SEO description"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" id="meta_keywords" class="form-control" placeholder="comma, separated, keywords">
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">Save Category</button>
                                    <a href="#" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
