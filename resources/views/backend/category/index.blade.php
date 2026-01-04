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
                        <div class="card-header">
                            <h5 class="card-title">Categories</h5>
                            <h6 class="card-subtitle text-muted">Manage Categories — search, filter, sort and paginate
                                results.</h6>
                        </div>

                        <div class="card-body">
                            <!-- Search & Sort -->
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == null ? 'active' : '' }}"
                                        href="{{ route('staffs.index', request()->except('status')) }}">All Staff</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'active' ? 'active' : '' }}"
                                        href="{{ route('staffs.index', array_merge(request()->except('status'), ['status' => 'active'])) }}">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'inactive' ? 'active' : '' }}"
                                        href="{{ route('staffs.index', array_merge(request()->except('status'), ['status' => 'inactive'])) }}">Inactive</a>
                                </li>
                            </ul>
                            <div class="bg-light border rounded p-3 mb-3 filter-bar">
                                <form method="GET" class="row g-2">
                                    <div class="col-10 col-md-10">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-12 col-md-5">
                                                <div class="input-group">
                                                    <span class="input-group-text">🔍</span>
                                                    <input type="search" name="search" class="form-control"
                                                        placeholder="Search categories (name, slug, keywords)"
                                                        value="{{ request('search') }}">
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3">
                                                <select name="sort" class="form-select">
                                                    <option>Name (A - Z)</option>
                                                    <option>Product Count (High - Low)</option>
                                                    <option>Date Created (Newest)</option>
                                                </select>
                                            </div>

                                            <div class="col-6 col-md-4 d-flex">
                                                <div class="me-2">
                                                    <select id="bulk-action" class="form-select form-select"
                                                        aria-label="Bulk actions">
                                                        <option value="">Bulk actions</option>
                                                        <option value="activate">Activate</option>
                                                        <option value="deactivate">Deactivate</option>
                                                        <option value="delete">Delete</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-2 col-md-2 text-end">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                        <button type="submit" class="btn btn-secondary">Clear</button>
                                        {{-- <button id="save-order" class="btn btn-outline-secondary ms-2" disabled aria-disabled="true">Save Order</button> --}}
                                        {{-- <small class="text-muted ms-2 d-none d-md-inline">Drag rows to reorder</small> --}}
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: combine filters or use tabs for quick
                                        status filters.</div>
                                </form>
                            </div>

                            <!-- Category Table -->
                            <div class="table-responsive">
                                <table class="table table-hover mb-0 align-middle">
                                    <thead>
                                        <tr>
                                            <th style="width:40px"><input type="checkbox" id="select-all"
                                                    aria-label="Select all"></th>
                                            <th style="width:36px" class="text-center" aria-label="Reorder">☰</th>
                                            <th>Name</th>
                                            <th>Slug</th>
                                            <th>Products</th>
                                            <th>Date Created</th>
                                            <th>Status</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-id="1" data-href="{{ route('category.edit', 1) }}">
                                            <td><input type="checkbox" class="row-checkbox" name="selected[]" value="1"
                                                    aria-label="Select Dark Chocolate"></td>
                                            <td class="drag-handle text-center" aria-label="Drag to reorder" role="button"
                                                title="Drag to reorder"><span class="drag-icon"
                                                    aria-hidden="true">≡</span><span class="visually-hidden">Drag</span>
                                            </td>
                                            <td>Dark Chocolate</td>
                                            <td>dark-chocolate</td>
                                            <td>1</td>
                                            <td>2024-05-10</td>
                                            <td><span class="badge bg-success" role="status"
                                                    aria-label="Active">Active</span></td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('category.show', 1) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('category.edit', 1) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                        data-name="Dark Chocolate">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr data-id="2" data-href="{{ route('category.edit', 2) }}">
                                            <td><input type="checkbox" class="row-checkbox" name="selected[]" value="2"
                                                    aria-label="Select Chocolate"></td>
                                            <td class="drag-handle text-center" aria-label="Drag to reorder" role="button"
                                                title="Drag to reorder"><span class="drag-icon"
                                                    aria-hidden="true">≡</span><span class="visually-hidden">Drag</span>
                                            </td>
                                            <td>Chocolate</td>
                                            <td>chocolate</td>
                                            <td>3</td>
                                            <td>2024-04-01</td>
                                            <td><span class="badge bg-success" role="status"
                                                    aria-label="Active">Active</span></td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('category.show', 2) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('category.edit', 2) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                        data-name="Chocolate">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr data-id="3" data-href="{{ route('category.edit', 3) }}">
                                            <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                    value="3" aria-label="Select Vanilla"></td>
                                            <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                role="button" title="Drag to reorder"><span class="drag-icon"
                                                    aria-hidden="true">≡</span><span class="visually-hidden">Drag</span>
                                            </td>
                                            <td>Vanilla</td>
                                            <td>vanilla</td>
                                            <td>2</td>
                                            <td>2024-02-18</td>
                                            <td><span class="badge bg-secondary" role="status"
                                                    aria-label="Inactive">Inactive</span></td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="{{ route('category.show', 3) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('category.edit', 3) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                        data-name="Vanilla">Delete</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr data-id="4" data-href="{{ route('category.edit', 4) }}">
                                            <td><input type="checkbox" class="row-checkbox" name="selected[]"
                                                    value="4" aria-label="Select Cakes"></td>
                                            <td class="drag-handle text-center" aria-label="Drag to reorder"
                                                role="button" title="Drag to reorder"><span class="drag-icon"
                                                    aria-hidden="true">≡</span><span class="visually-hidden">Drag</span>
                                            </td>
                                            <td>Cakes</td>
                                            <td>cakes</td>
                                            <td>5</td>
                                            <td>2023-11-10</td>
                                            <td><span class="badge bg-success" role="status"
                                                    aria-label="Active">Active</span></td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('category.edit', 4) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <button class="btn btn-sm btn-outline-danger btn-delete"
                                                        data-name="Cakes">Delete</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="mb-2 mb-md-0 d-flex align-items-center">
                                <div class="d-inline-block me-2">Show</div>
                                <form method="GET" class="d-inline-block">
                                    @foreach (request()->except('per_page', 'page') as $k => $v)
                                        <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                                    @endforeach
                                    <select name="per_page" class="form-select d-inline-block w-auto"
                                        onchange="this.form.submit()">
                                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10
                                        </option>
                                        <option value="25" {{ request('per_page') == 25 ? 'selected' : '' }}>25
                                        </option>
                                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50
                                        </option>
                                    </select>
                                </form>
                                <div class="d-inline-block ms-2">entries</div>
                            </div>

                            <div>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
