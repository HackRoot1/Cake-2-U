@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Roles</strong> Dashboard</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('roles.create') }}" class="btn btn-primary">New Role</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Roles</h5>
                            <h6 class="card-subtitle text-muted">Manage user roles and their permissions.</h6>
                        </div>

                        <div class="card-body">
                            <form method="GET" class="row g-2 align-items-center">
                                <div class="col-sm-12 col-md-4">
                                    <input type="search" name="search" class="form-control" placeholder="Search by name">
                                </div>

                                <div class="col-sm-12 col-md-4 d-flex">
                                    <input type="date" name="date_from" class="form-control me-2" placeholder="From">
                                    <input type="date" name="date_to" class="form-control" placeholder="To">
                                </div>

                                <div class="col-sm-6 col-md-2">
                                    <select name="status" class="form-select">
                                        <option value="">All Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>
                                </div>

                                <div class="col-sm-6 col-md-2 d-flex">
                                    <select name="sort" class="form-select me-2">
                                        <option value="name_asc">Name (A - Z)</option>
                                        <option value="name_desc">Name (Z - A)</option>
                                        <option value="created_asc">Created (Oldest)</option>
                                        <option value="created_desc" selected>Created (Newest)</option>
                                    </select>
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>

                                <div class="col-12">
                                    <div class="form-text text-muted">Tip: combine filters to narrow results.</div>
                                </div>
                            </form>

                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Created At</th>
                                            <th scope="col" class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Administrator</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>2025-12-01</td>
                                            <td class="text-end">
                                                <a href="{{ route('roles.edit', 1) }}"
                                                    class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Editor</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>2025-11-15</td>
                                            <td class="text-end">
                                                <a href="{{ route('roles.edit', 2) }}"
                                                    class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Guest</td>
                                            <td><span class="badge bg-secondary">Inactive</span></td>
                                            <td>2025-10-08</td>
                                            <td class="text-end">
                                                <a href="{{ route('roles.edit', 3) }}"
                                                    class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="mb-2 mb-md-0">
                                <div class="d-inline-block me-2">Show</div>
                                <select class="form-select d-inline-block w-auto" name="per_page">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                </select>
                                <div class="d-inline-block ms-2">entries</div>
                            </div>

                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
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
    </main>
@endsection
