@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Staff</strong> Dashboard</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('staffs.create') }}" class="btn btn-primary">New Staff</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Staffs</h5>
                            <h6 class="card-subtitle text-muted">Manage Staff — search, filter, sort and paginate
                                results.</h6>
                        </div>
                        <div class="card-body">
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
                                                        placeholder="Search name, email or phone"
                                                        value="{{ request('search') }}">
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-3">
                                                <select name="sort" class="form-select">
                                                    <option value="name_asc"
                                                        {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name (A - Z)
                                                    </option>
                                                    <option value="name_desc"
                                                        {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z - A)
                                                    </option>
                                                    <option value="email_asc"
                                                        {{ request('sort') == 'email_asc' ? 'selected' : '' }}>Email (A -
                                                        Z)
                                                    </option>
                                                    <option value="email_desc"
                                                        {{ request('sort') == 'email_desc' ? 'selected' : '' }}>Email (Z -
                                                        A)
                                                    </option>
                                                    <option value="role_asc"
                                                        {{ request('sort') == 'role_asc' ? 'selected' : '' }}>Role (A - Z)
                                                    </option>
                                                    <option value="role_desc"
                                                        {{ request('sort') == 'role_desc' ? 'selected' : '' }}>Role (Z - A)
                                                    </option>
                                                    <option value="date_joined_asc"
                                                        {{ request('sort') == 'date_joined_asc' ? 'selected' : '' }}>Date
                                                        Joined (Oldest)</option>
                                                    <option value="date_joined_desc"
                                                        {{ request('sort') == 'date_joined_desc' ? 'selected' : '' }}>Date
                                                        Joined (Newest)</option>
                                                    <option value="last_login_asc"
                                                        {{ request('sort') == 'last_login_asc' ? 'selected' : '' }}>Last
                                                        Login
                                                        (Oldest)</option>
                                                    <option value="last_login_desc"
                                                        {{ request('sort') == 'last_login_desc' ? 'selected' : '' }}>Last
                                                        Login
                                                        (Newest)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-2 col-md-2 text-end">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                        <button type="submit" class="btn btn-secondary">Clear</button>
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: combine filters or use tabs for quick
                                        status filters.</div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Staff ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Role</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Last Login</th>
                                            <th scope="col" class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John Doe</td>
                                            <td><a href="#">john@example.com</a></td>
                                            <td>+1 555-555-5555</td>
                                            <td>Manager</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td>2025-12-14 09:14</td>
                                            <td class="text-end">
                                                <a href="{{ route('staffs.show', 1) }}"
                                                    class="btn btn-sm btn-outline-primary">View</a>
                                                <a href="{{ route('staffs.edit', 1) }}"
                                                    class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Jane Smith</td>
                                            <td><a href="#">jane@example.com</a></td>
                                            <td>+1 555-111-2222</td>
                                            <td>Editor</td>
                                            <td><span class="badge bg-secondary">Inactive</span></td>
                                            <td>—</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-sm btn-outline-primary">View</a>
                                                <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
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
