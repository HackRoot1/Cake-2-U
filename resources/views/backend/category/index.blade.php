@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Category</strong> Management</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <!-- Search & Sort -->
                            <div class="row g-2 mb-3 align-items-center">
                                <div class="col-12 col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-text">🔍</span>
                                        <input class="form-control" placeholder="Search categories (name, slug, keywords)" value="Chocolate">
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="d-flex">
                                        <label class="me-2 mt-1">Sort</label>
                                        <select class="form-select w-auto">
                                            <option>Name (A - Z)</option>
                                            <option>Product Count (High - Low)</option>
                                            <option>Date Created (Newest)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3 text-end">
                                    <div class="btn-group" role="group">
                                        <button class="btn btn-outline-secondary">Bulk: Activate</button>
                                        <button class="btn btn-outline-secondary">Deactivate</button>
                                        <button class="btn btn-outline-danger">Delete</button>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <!-- Category Tree -->
                                    <div class="bg-light border rounded p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <strong>Categories (Tree)</strong>
                                            <small class="text-muted">Drag to rearrange</small>
                                        </div>

                                        <ul class="list-unstyled tree-root">
                                            <li>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>🎂 Cakes</strong>
                                                        <div class="small text-muted">5 products</div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                        <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                                    </div>
                                                </div>

                                                <ul class="ps-3 mt-2">
                                                    <li>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <strong>🍫 Chocolate</strong>
                                                                <div class="small text-muted">3 products</div>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                                <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                                            </div>
                                                        </div>

                                                        <ul class="ps-3 mt-2">
                                                            <li>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div>
                                                                        <strong>🌑 Dark Chocolate</strong>
                                                                        <div class="small text-muted">1 product</div>
                                                                    </div>
                                                                    <div class="btn-group">
                                                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                                        <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>

                                                    <li class="mt-2">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <strong>🍨 Vanilla</strong>
                                                                <div class="small text-muted">2 products</div>
                                                            </div>
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                                <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="mt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <strong>🧁 Cupcakes</strong>
                                                        <div class="small text-muted">10 products</div>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                        <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="small text-muted mt-3">Note: This is a static demo of a hierarchical tree (supports unlimited levels)</div>
                                    </div>
                                </div>

                                <div class="col-12 col-lg-8">
                                    <!-- Category Table -->
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0 align-middle">
                                            <thead>
                                                <tr>
                                                    <th style="width:40px"><input type="checkbox"></th>
                                                    <th>Name</th>
                                                    <th>Slug</th>
                                                    <th>Products</th>
                                                    <th>Date Created</th>
                                                    <th>Status</th>
                                                    <th class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Dark Chocolate</td>
                                                    <td>dark-chocolate</td>
                                                    <td>1</td>
                                                    <td>2024-05-10</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Chocolate</td>
                                                    <td>chocolate</td>
                                                    <td>3</td>
                                                    <td>2024-04-01</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Vanilla</td>
                                                    <td>vanilla</td>
                                                    <td>2</td>
                                                    <td>2024-02-18</td>
                                                    <td><span class="badge bg-secondary">Inactive</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox"></td>
                                                    <td>Cakes</td>
                                                    <td>cakes</td>
                                                    <td>5</td>
                                                    <td>2023-11-10</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="mt-3 d-flex justify-content-between align-items-center">
                                        <div class="small text-muted">Showing 1-4 of 4 categories</div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
