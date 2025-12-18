@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Categories</a></li>
                            <li class="breadcrumb-item"><a href="#">Chocolate</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dark Chocolate</li>
                        </ol>
                    </nav>
                    <h3><strong>Category</strong> Detail</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" class="btn btn-secondary me-2">Back to categories</a>

                    <div class="btn-group">
                        <a href="#" class="btn btn-primary">Edit</a>
                        <form onsubmit="return confirm('Delete category and its 1 product? This action cannot be undone.');" class="d-inline">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Category card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="/img/placeholder-250x250.png" alt="Category" class="rounded img-fluid" style="width:150px;height:150px;object-fit:cover;">

                            <h4 class="mt-3 mb-0">Dark Chocolate</h4>
                            <div class="small text-muted mb-2">Slug: <code>dark-chocolate</code></div>

                            <div class="mb-2">
                                <span class="badge bg-success">Active</span>
                                <span class="ms-2 small text-muted">Products: <strong>1</strong></span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="#" class="btn btn-primary">Edit Category</a>
                                <button class="btn btn-outline-secondary" onclick="location.href='#add-product'">Add Product</button>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Description</strong>
                                <div class="small text-muted mt-1">Rich dark chocolate cakes with a deep cocoa profile.</div>
                            </li>

                            <li class="list-group-item">
                                <strong>SEO</strong>
                                <div class="small text-muted mt-1">Meta title: Dark Chocolate Cakes — Shop</div>
                                <div class="small text-muted">Meta description: Browse our dark chocolate cakes and desserts.</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Hierarchy</strong>
                                <div class="small text-muted mt-1">Cakes &gt; Chocolate &gt; Dark Chocolate</div>
                            </li>
                        </ul>
                    </div>

                    <!-- Sub-categories -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sub-categories</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>— No sub-categories</strong>
                                        <div class="small text-muted">Add sub-categories to build multi-level hierarchy.</div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Add</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Products list -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Products in "Dark Chocolate"</h5>
                            <div>
                                <a href="#" class="btn btn-sm btn-outline-primary">View All Products</a>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>SKU</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="fw-bold">Dark Chocolate Truffle Cake</div>
                                                <div class="small text-muted">A rich, moist dark chocolate celebration cake.</div>
                                            </td>
                                            <td>DC-001</td>
                                            <td>₹1,499.00</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center">
                            <div class="small text-muted">Showing 1-1 of 1</div>
                            <nav>
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>

                    <!-- Bulk actions & notes -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Bulk Actions</h5>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary">Activate</button>
                                <button class="btn btn-sm btn-outline-secondary">Deactivate</button>
                                <button class="btn btn-sm btn-outline-danger">Delete</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="small text-muted">Select multiple products or sub-categories above to apply bulk actions. This is a static demo view.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection 