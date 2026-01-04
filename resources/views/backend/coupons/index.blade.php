@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Coupon</strong> Dashboard</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('coupons.create') }}" class="btn btn-primary">New Coupon</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == null ? 'active' : '' }}"
                                        href="{{ route('coupons.index', request()->except('status')) }}">All Coupons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'active' ? 'active' : '' }}"
                                        href="{{ route('coupons.index', array_merge(request()->except('status'), ['status' => 'active'])) }}">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'inactive' ? 'active' : '' }}"
                                        href="{{ route('coupons.index', array_merge(request()->except('status'), ['status' => 'inactive'])) }}">Inactive</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'expired' ? 'active' : '' }}"
                                        href="{{ route('coupons.index', array_merge(request()->except('status'), ['status' => 'expired'])) }}">Expired</a>
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
                                                        placeholder="Search by code or description"
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
                                                    <option value="expired"
                                                        {{ request('status') == 'expired' ? 'selected' : '' }}>Expired
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-6 col-md-2">
                                                <select name="discount_type" class="form-select">
                                                    <option value=""
                                                        {{ request('discount_type') == '' ? 'selected' : '' }}>Any type
                                                    </option>
                                                    <option value="percentage"
                                                        {{ request('discount_type') == 'percentage' ? 'selected' : '' }}>
                                                        Percentage</option>
                                                    <option value="fixed"
                                                        {{ request('discount_type') == 'fixed' ? 'selected' : '' }}>Fixed
                                                        amount</option>
                                                </select>
                                            </div>

                                            <div class="col-6 col-md-2">
                                                <select name="sort" class="form-select">
                                                    <option value="code_asc"
                                                        {{ request('sort') == 'code_asc' ? 'selected' : '' }}>Code (A - Z)
                                                    </option>
                                                    <option value="code_desc"
                                                        {{ request('sort') == 'code_desc' ? 'selected' : '' }}>Code (Z - A)
                                                    </option>
                                                    <option value="type_asc"
                                                        {{ request('sort') == 'type_asc' ? 'selected' : '' }}>Type (A - Z)
                                                    </option>
                                                    <option value="type_desc"
                                                        {{ request('sort') == 'type_desc' ? 'selected' : '' }}>Type (Z - A)
                                                    </option>
                                                    <option value="value_desc"
                                                        {{ request('sort') == 'value_desc' ? 'selected' : '' }}>Value (High
                                                        - Low)</option>
                                                    <option value="value_asc"
                                                        {{ request('sort') == 'value_asc' ? 'selected' : '' }}>Value (Low -
                                                        High)</option>
                                                    <option value="expiry_asc"
                                                        {{ request('sort') == 'expiry_asc' ? 'selected' : '' }}>Expiry
                                                        (Oldest)</option>
                                                    <option value="expiry_desc"
                                                        {{ request('sort') == 'expiry_desc' ? 'selected' : '' }}>Expiry
                                                        (Newest)</option>
                                                    <option value="usage_desc"
                                                        {{ request('sort') == 'usage_desc' ? 'selected' : '' }}>Usage
                                                        (High)</option>
                                                    <option value="usage_asc"
                                                        {{ request('sort') == 'usage_asc' ? 'selected' : '' }}>Usage (Low)
                                                    </option>
                                                </select>
                                            </div>

                                            <div class="col-6 col-md-3">
                                                <div class="d-flex">
                                                    <input type="date" name="expiry_to" class="form-control"
                                                        value="{{ request('expiry_to') }}" placeholder="Expiry to">
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3">
                                                <div class="d-flex">
                                                    <input type="date" name="expiry_from" class="form-control me-2"
                                                        value="{{ request('expiry_from') }}" placeholder="Expiry from">
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div class="col-1 col-md-1 text-end">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: combine filters or use bulk actions for
                                        quicker updates.</div>
                                </form>
                            </div>

                            <div class="d-flex mb-2 align-items-center justify-content-end">
                                <select id="bulkActionSelect" class="form-select w-auto me-2">
                                    <option value="">Bulk actions</option>
                                    <option value="activate">Activate</option>
                                    <option value="deactivate">Deactivate</option>
                                    <option value="delete">Delete</option>
                                    <option value="extend">Extend expiry</option>
                                    <option value="adjust">Adjust discount</option>
                                </select>
                                <button type="button" class="btn btn-sm btn-primary" id="applyBulkBtn">Apply</button>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col"><input type="checkbox" id="selectAll"></th>
                                            <th scope="col">Code</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Value</th>
                                            <th scope="col">Validity</th>
                                            <th scope="col">Usage</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" disabled></td>
                                            <th scope="row"><a href="{{ route('coupons.show', 1) }}">SAVE20</a>
                                            </th>
                                            <td>
                                                <div class="text-truncate cell-truncate">20% off on orders above ₹500
                                                </div>
                                            </td>
                                            <td>Percentage</td>
                                            <td>20%</td>
                                            <td>
                                                <div>
                                                    From: 2025-01-01<br>
                                                    To: 2025-03-31
                                                </div>
                                            </td>
                                            <td>150 / 1000</td>
                                            <td><span class="badge bg-success">Active</span></td>
                                            <td class="text-end">
                                                <div class="d-inline-flex gap-1">
                                                    <a href="{{ route('coupons.show', 1) }}"
                                                        class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('coupons.edit', 1) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <form method="POST" action="{{ route('coupons.destroy', 1) }}"
                                                        class="d-inline" onsubmit="return confirm('Delete coupon?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <th scope="row"><a href="{{ route('coupons.show', 2) }}">WELCOME10</a>
                                            </th>
                                            <td>
                                                <div class="text-truncate cell-truncate">Flat ₹10 off for first orders
                                                </div>
                                            </td>
                                            <td>Fixed</td>
                                            <td>₹10</td>
                                            <td>
                                                <div>
                                                    From: 2025-01-01<br>
                                                    To: 2025-03-31
                                                </div>
                                            </td>
                                            <td>20 / 200</td>
                                            <td><span class="badge bg-secondary">Inactive</span></td>
                                            <td class="text-end">
                                                <div class="d-inline-flex gap-1">
                                                    <a href="{{ route('coupons.show', 2) }}"
                                                        class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('coupons.edit', 2) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <form method="POST" action="{{ route('coupons.destroy', 1) }}"
                                                        class="d-inline" onsubmit="return confirm('Delete coupon?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <th scope="row"><a href="{{ route('coupons.show', 3) }}">VIP50</a>
                                            </th>
                                            <td>
                                                <div class="text-truncate cell-truncate">50% off for VIP customers only
                                                </div>
                                            </td>
                                            <td>Percentage</td>
                                            <td>50% (max ₹500)</td>
                                            <td>
                                                <div>
                                                    From: 2025-01-01<br>
                                                    To: 2025-03-31
                                                </div>
                                            </td>
                                            <td>0 / 500</td>
                                            <td><span class="badge bg-danger">Expired</span></td>
                                            <td class="text-end">
                                                <div class="d-inline-flex gap-1">
                                                    <a href="{{ route('coupons.show', 3) }}"
                                                        class="btn btn-sm btn-outline-primary">View</a>
                                                    <a href="{{ route('coupons.edit', 3) }}"
                                                        class="btn btn-sm btn-outline-secondary">Edit</a>
                                                    <form method="POST" action="{{ route('coupons.destroy', 1) }}"
                                                        class="d-inline" onsubmit="return confirm('Delete coupon?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </form>
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
