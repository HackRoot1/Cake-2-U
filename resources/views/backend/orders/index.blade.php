@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Customer</strong> Dashboard</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('customers.create') }}" class="btn btn-primary">New Customer</a>
                </div>
            </div>

            <div class="row">

                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == null ? 'active' : '' }}"
                                        href="{{ route('customers.index', request()->except('status')) }}">All Customer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'active' ? 'active' : '' }}"
                                        href="{{ route('customers.index', array_merge(request()->except('status'), ['status' => 'active'])) }}">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'inactive' ? 'active' : '' }}"
                                        href="{{ route('customers.index', array_merge(request()->except('status'), ['status' => 'inactive'])) }}">Inactive</a>
                                </li>
                            </ul>

                            <div class="bg-light border rounded p-3 mb-3 filter-bar">
                                <form method="GET" class="row g-2">
                                    <div class="col-11">
                                        <div class="row g-2 align-items-center">
                                            <div class="col-12 col-md-4">
                                                <div class="input-group">
                                                    <span class="input-group-text">🔍</span>
                                                    <input type="search" name="search" class="form-control"
                                                        placeholder="Search name, email or phone"
                                                        value="{{ request('search') }}">
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-2">
                                                <select name="status" class="form-select">
                                                    <option value="" {{ request('status') == '' ? 'selected' : '' }}>
                                                        Any status</option>
                                                    <option value="active"
                                                        {{ request('status') == 'active' ? 'selected' : '' }}>Active
                                                    </option>
                                                    <option value="inactive"
                                                        {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-6 col-md-4">
                                                <div class="d-flex">
                                                    <input type="date" name="date_from" class="form-control me-2"
                                                        value="{{ request('date_from') }}">
                                                    <input type="date" name="date_to" class="form-control"
                                                        value="{{ request('date_to') }}">
                                                </div>
                                            </div>

                                            <div class="col-6 col-md-2">
                                                <select name="sort" class="form-select">
                                                    <option value="name_asc"
                                                        {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name (A - Z)
                                                    </option>
                                                    <option value="name_desc"
                                                        {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z - A)
                                                    </option>
                                                    <option value="email_asc"
                                                        {{ request('sort') == 'email_asc' ? 'selected' : '' }}>Email (A -
                                                        Z)</option>
                                                    <option value="email_desc"
                                                        {{ request('sort') == 'email_desc' ? 'selected' : '' }}>Email (Z -
                                                        A)</option>
                                                    <option value="registration_date_asc"
                                                        {{ request('sort') == 'registration_date_asc' ? 'selected' : '' }}>
                                                        Registration Date (Oldest)</option>
                                                    <option value="registration_date_desc"
                                                        {{ request('sort') == 'registration_date_desc' ? 'selected' : '' }}>
                                                        Registration Date (Newest)</option>
                                                    <option value="lifetime_value_asc"
                                                        {{ request('sort') == 'lifetime_value_asc' ? 'selected' : '' }}>
                                                        Lifetime Value (Low - High)</option>
                                                    <option value="lifetime_value_desc"
                                                        {{ request('sort') == 'lifetime_value_desc' ? 'selected' : '' }}>
                                                        Lifetime Value (High - Low)</option>
                                                    <option value="last_order_asc"
                                                        {{ request('sort') == 'last_order_asc' ? 'selected' : '' }}>Last
                                                        Order (Oldest)</option>
                                                    <option value="last_order_desc"
                                                        {{ request('sort') == 'last_order_desc' ? 'selected' : '' }}>Last
                                                        Order (Newest)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-1 col-md-1 text-end">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: combine filters or use tabs for quick
                                        status filters.</div>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="bulkActionForm" method="POST" action="{{ route('customers.bulk') }}">
                                @csrf
                                <input type="hidden" name="action" id="bulkActionInput" value="">

                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th scope="col"><input type="checkbox" id="selectAll"></th>
                                                <th scope="col">Customer&nbsp;ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Registration&nbsp;Date</th>
                                                <th scope="col">Total&nbsp;Orders</th>
                                                <th scope="col">Status</th>
                                                <th scope="col" class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><input type="checkbox" disabled></td>
                                                <th scope="row">1001</th>
                                                <td>
                                                    <div class="text-truncate cell-truncate">Test Customer A
                                                        <div class="small text-muted d-block d-sm-none">testa@example.com
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="mailto:testa@example.com">testa@example.com</a></td>
                                                <td>2025-01-10 10:00</td>
                                                <td>3</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td class="text-end">
                                                    <div class="d-inline-flex gap-1">
                                                        <a href="{{ route('customers.show', 1) }}"
                                                            class="btn btn-sm btn-outline-primary ">View</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-primary ">Orders</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-secondary ">Msg</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" disabled></td>
                                                <th scope="row">1002</th>
                                                <td>
                                                    <div class="text-truncate cell-truncate">Test Customer B
                                                        <div class="small text-muted d-block d-sm-none">testb@example.com
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="mailto:testb@example.com">testb@example.com</a></td>
                                                <td>2024-06-22 15:30</td>
                                                <td>7</td>
                                                <td><span class="badge bg-secondary">Inactive</span></td>
                                                <td class="text-end">
                                                    <div class="d-inline-flex gap-1">
                                                        <a href="{{ route('customers.show', 1) }}"
                                                            class="btn btn-sm btn-outline-primary ">View</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-primary ">Orders</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-secondary ">Msg</a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><input type="checkbox" ></td>
                                                <th scope="row">1003</th>
                                                <td>
                                                    <div class="text-truncate cell-truncate">Sample Customer C
                                                        <div class="small text-muted d-block d-sm-none">samplec@example.com
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><a href="mailto:samplec@example.com">samplec@example.com</a></td>
                                                <td>2023-09-05 09:20</td>
                                                <td>0</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                                <td class="text-end">
                                                    <div class="d-inline-flex gap-1">
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-primary ">View</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-primary ">Orders</a>
                                                        <a href="#"
                                                            class="btn btn-sm btn-outline-secondary ">Msg</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
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
