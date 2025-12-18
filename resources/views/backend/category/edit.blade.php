@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Edit</strong> Category</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" class="btn btn-secondary">Back to categories</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Category</h5>
                            <h6 class="card-subtitle text-muted">Static demo of editing a category.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <!-- Static demo - no backend changes -->

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="name" class="form-label">Category Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="name" placeholder="Chocolate" value="Chocolate" required oninput="document.getElementById('slug').value=this.value.toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'')">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="slug" class="form-label">Slug / URL</label>
                                        <input type="text" class="form-control" id="slug" value="chocolate">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="parent" class="form-label">Parent Category</label>
                                        <select id="parent" class="form-select">
                                            <option>🍰 Cakes</option>
                                            <option selected>-- Chocolate (current parent) --</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="display_order" class="form-label">Display Order</label>
                                        <input type="number" id="display_order" class="form-control" value="2">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Category Description</label>
                                    <textarea id="description" class="form-control" rows="4">Delicious chocolate cake variants and related products.</textarea>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Category Image (thumbnail)</label>
                                        <div class="d-flex align-items-center gap-3">
                                            <img src="/img/placeholder-150x150.png" alt="thumb" style="width:80px;height:80px;object-fit:cover;border-radius:4px;" />
                                            <div>
                                                <input type="file" class="form-control">
                                                <div class="small text-muted mt-1">Current image shown. Upload to change.</div>
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
                                        <input type="text" id="meta_title" class="form-control" value="Chocolate Cakes - Shop">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea id="meta_description" class="form-control" rows="2">A curated collection of chocolate cakes, cupcakes and more.</textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                    <input type="text" id="meta_keywords" class="form-control" value="chocolate,cakes,dessert">
                                </div>

                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">Update Category</button>

                                    <form onsubmit="return confirm('Delete category and its 3 products? This action cannot be undone.')" class="ms-2">
                                        <button type="submit" class="btn btn-outline-danger">Delete Category</button>
                                    </form>

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
