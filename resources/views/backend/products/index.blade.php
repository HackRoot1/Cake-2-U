@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Product</strong> Dashboard</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('products.create') }}" class="btn btn-primary">New product</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link active"
                                        href="{{ route('products.index', request()->except('status')) }}">All product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Active</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Inactive</a>
                                </li>
                            </ul>

                            <div class="bg-light border rounded p-3 mb-3 filter-bar">
                                <form method="GET" class="row g-2 filter-form">
                                    <input type="hidden" name="view" id="viewInput"
                                        value="{{ request('view', 'table') }}">

                                    <div class="col-12 col-md-6">
                                        <div class="input-group">
                                            <span class="input-group-text">🔍</span>
                                            <input type="search" name="search" class="form-control"
                                                placeholder="Search name, SKU or category" value="{{ request('search') }}">
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <select name="status" class="form-select">
                                            <option value="">Any status</option>
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <select name="categories[]" class="form-select">
                                            <option value="">-- Select categories --</option>
                                            <option value="cakes">Cakes</option>
                                            <option value="cookies">Cookies</option>
                                            <option value="decorations">Decorations</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <div class="d-flex">
                                            <input type="number" min="0" name="price_min" class="form-control me-2"
                                                placeholder="Min" value="{{ request('price_min') }}">
                                            <input type="number" min="0" name="price_max" class="form-control"
                                                placeholder="Max" value="{{ request('price_max') }}">
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-4">
                                        <div class="row g-2">
                                            <div class="col-12">
                                                <div class="d-flex">
                                                    <input type="date" name="date_from" class="form-control me-2"
                                                        value="{{ request('date_from') }}">
                                                    <input type="date" name="date_to" class="form-control"
                                                        value="{{ request('date_to') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-3">
                                        <select name="sort" class="form-select">
                                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>
                                                Name (A - Z)</option>
                                            <option value="name_desc"
                                                {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z - A)</option>
                                            <option value="price_asc"
                                                {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price (Low - High)
                                            </option>
                                            <option value="price_desc"
                                                {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price (High - Low)
                                            </option>
                                            <option value="stock_asc"
                                                {{ request('sort') == 'stock_asc' ? 'selected' : '' }}>Stock (Low - High)
                                            </option>
                                            <option value="stock_desc"
                                                {{ request('sort') == 'stock_desc' ? 'selected' : '' }}>Stock (High - Low)
                                            </option>
                                            <option value="rating_desc"
                                                {{ request('sort') == 'rating_desc' ? 'selected' : '' }}>Rating (High -
                                                Low)</option>
                                            <option value="most_sold"
                                                {{ request('sort') == 'most_sold' ? 'selected' : '' }}>Most Sold</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-2 text-end">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: use the view buttons to switch between
                                        Grid / List / Table views.</div>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">
                            <form id="bulkActionForm" method="POST" action="{{ route('products.bulk') }}">
                                @csrf
                                <input type="hidden" name="action" id="bulkActionInput" value="">
                                <input type="hidden" name="view" id="bulkViewInput"
                                    value="{{ request('view', 'table') }}">

                                <div class="d-flex justify-content-between mb-3 align-items-center">
                                    <div class="d-flex gap-2 align-items-center">
                                        <select id="bulkActionSelect" class="form-select ms-2 me-2"
                                            style="min-width:220px;">
                                            <option value="">Bulk actions</option>
                                            <option value="change_category">Change category</option>
                                            <option value="change_price">Change price</option>
                                            <option value="change_status">Change status</option>
                                            <option value="add_tags">Add tags</option>
                                            <option value="adjust_stock">Adjust stock</option>
                                            <option value="change_visibility">Change visibility</option>
                                            <option value="delete">Delete</option>
                                        </select>

                                        <button type="button" class="btn btn-secondary" id="applyBulkBtn">Apply</button>
                                    </div>

                                    <div>
                                        <div class="btn-group" role="group" aria-label="View toggle">
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-sm {{ request('view') == 'grid' ? 'active' : '' }}"
                                                onclick="setViewAndSubmit('grid')">Grid</button>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-sm {{ request('view') == 'list' ? 'active' : '' }}"
                                                onclick="setViewAndSubmit('list')">List</button>
                                            <button type="button"
                                                class="btn btn-outline-secondary btn-sm {{ request('view', 'table') == 'table' ? 'active' : '' }}"
                                                onclick="setViewAndSubmit('table')">Table</button>
                                        </div>
                                    </div>
                                </div>

                                {{-- Grid view --}}
                                @if (request('view') == 'grid')
                                    <div class="row row-cols-1 row-cols-md-3 g-3">
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="https://placehold.co/400x220" class="card-img-top"
                                                    alt="Product image">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title">Test product A</h5>
                                                    <p class="mb-1 small text-muted">SKU: TPA-1001 • Cakes</p>
                                                    <div class="mb-2">
                                                        <strong>$29.00</strong>
                                                        <div class="small text-muted">Stock: 15</div>
                                                    </div>
                                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="badge bg-success">Active</span>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="{{ route('products.show', 1) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('products.edit', 1) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="https://placehold.co/400x220" class="card-img-top"
                                                    alt="Product image">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title">Test product B</h5>
                                                    <p class="mb-1 small text-muted">SKU: TPB-1002 • Cookies</p>
                                                    <div class="mb-2">
                                                        <strong><del class="text-muted">$45.00</del> <span
                                                                class="ms-1">$39.00</span></strong>
                                                        <div class="small text-muted">Stock: 3</div>
                                                    </div>
                                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="badge bg-secondary">Inactive</span>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('products.show', 1) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="https://placehold.co/400x220" class="card-img-top"
                                                    alt="Product image">
                                                <div class="card-body d-flex flex-column">
                                                    <h5 class="card-title">Sample product C</h5>
                                                    <p class="mb-1 small text-muted">SKU: SPC-1003 • Decorations</p>
                                                    <div class="mb-2">
                                                        <strong>$12.00</strong>
                                                        <div class="small text-muted">Stock: 0</div>
                                                    </div>
                                                    <div class="mt-auto d-flex justify-content-between align-items-center">
                                                        <div>
                                                            <span class="badge bg-success">Active</span>
                                                        </div>
                                                        <div class="btn-group">
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('products.show', 1) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- List view --}}
                                @elseif(request('view') == 'list')
                                    <div class="list-group">
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="https://placehold.co/64" class="img-thumbnail"
                                                    width="64" alt="">
                                                <div>
                                                    <div class="fw-bold">Test product A</div>
                                                    <div class="small text-muted">SKU: TPA-1001 • Cakes</div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div><strong>$29.00</strong></div>
                                                <div class="small text-muted">Stock: 15 • <span
                                                        class="badge bg-success">Active</span></div>
                                            </div>
                                        </div>

                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center gap-3">
                                                <img src="https://placehold.co/64" class="img-thumbnail"
                                                    width="64" alt="">
                                                <div>
                                                    <div class="fw-bold">Test product B</div>
                                                    <div class="small text-muted">SKU: TPB-1002 • Cookies</div>
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <div><strong>$39.00</strong></div>
                                                <div class="small text-muted">Stock: 3 • <span
                                                        class="badge bg-secondary">Inactive</span></div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Table view --}}
                                @else
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col"><input type="checkbox" id="selectAll"></th>
                                                    <th scope="col">Thumbnail</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">SKU</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Last updated</th>
                                                    <th scope="col" class="text-end">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><input type="checkbox" class="product-checkbox"></td>
                                                    <td><img src="https://placehold.co/48" width="48"
                                                            class="img-thumbnail" alt=""></td>
                                                    <td>Test product A</td>
                                                    <td>TPA-1001</td>
                                                    <td>Cakes</td>
                                                    <td>$29.00</td>
                                                    <td>15</td>
                                                    <td>4.5 (12)</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>2025-01-10</td>
                                                    <td class="text-end">
                                                        <div class="d-inline-flex gap-1">
                                                            <a href="{{ route('products.show', 1) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('products.show', 1) }}"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="product-checkbox"></td>
                                                    <td><img src="https://placehold.co/48" width="48"
                                                            class="img-thumbnail" alt=""></td>
                                                    <td>Test product B</td>
                                                    <td>TPB-1002</td>
                                                    <td>Cookies</td>
                                                    <td><del class="text-muted">$45.00</del> $39.00</td>
                                                    <td>3</td>
                                                    <td>4.0 (7)</td>
                                                    <td><span class="badge bg-secondary">Inactive</span></td>
                                                    <td>2024-06-22</td>
                                                    <td class="text-end">
                                                        <div class="d-inline-flex gap-1">
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="checkbox" class="product-checkbox"></td>
                                                    <td><img src="https://placehold.co/48" width="48"
                                                            class="img-thumbnail" alt=""></td>
                                                    <td>Sample product C</td>
                                                    <td>SPC-1003</td>
                                                    <td>Decorations</td>
                                                    <td>$12.00</td>
                                                    <td>0</td>
                                                    <td>3.8 (2)</td>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                    <td>2023-09-05</td>
                                                    <td class="text-end">
                                                        <div class="d-inline-flex gap-1">
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-secondary">Edit</a>
                                                            <a href="#"
                                                                class="btn btn-sm btn-outline-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                @endif

                            </form>
                        </div>


                        <div class="card-footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                            <div class="mb-2 mb-md-0 d-flex align-items-center">
                                <div class="d-inline-block me-2">Show</div>
                                <form method="GET" class="d-inline-block">
                                    {{-- 
                                    @foreach (request()->except('per_page', 'page') as $k => $v)
                                        <input type="hidden" name="{{ $k }}" value="{{ $v }}">
                                    @endforeach --}}
                                    <select name="per_page" class="form-select d-inline-block w-auto"
                                        onchange="this.form.submit()">
                                        <option value="12" {{ request('per_page') == 12 ? 'selected' : '' }}>12
                                        </option>
                                        <option value="24" {{ request('per_page') == 24 ? 'selected' : '' }}>24
                                        </option>
                                        <option value="48" {{ request('per_page') == 48 ? 'selected' : '' }}>48
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

        <script>
            function setViewAndSubmit(view) {
                var filterForm = document.querySelector('form.filter-form');
                var bulkView = document.getElementById('bulkViewInput');
                var viewInput = document.getElementById('viewInput');
                if (viewInput) viewInput.value = view;
                if (bulkView) bulkView.value = view;
                if (filterForm) filterForm.submit();
            }

            // select all handlers
            var selectAll = document.getElementById('selectAll');
            var selectAllTop = document.getElementById('selectAllTop');

            function toggleAll(checked) {
                document.querySelectorAll('.product-checkbox').forEach(function(cb) {
                    cb.checked = checked;
                });
                if (selectAll) selectAll.checked = checked;
                if (selectAllTop) selectAllTop.checked = checked;
            }
            if (selectAll) {
                selectAll.addEventListener('change', function(e) {
                    toggleAll(e.target.checked);
                });
            }
            if (selectAllTop) {
                selectAllTop.addEventListener('change', function(e) {
                    toggleAll(e.target.checked);
                });
            }

            // bulk action apply
            var applyBtn = document.getElementById('applyBulkBtn');
            if (applyBtn) {
                applyBtn.addEventListener('click', function() {
                    var action = document.getElementById('bulkActionSelect').value;
                    if (!action) {
                        alert('Please choose a bulk action');
                        return;
                    }
                    if (action === 'delete' && !confirm('Are you sure you want to delete the selected products?'))
                        return;
                    document.getElementById('bulkActionInput').value = action;
                    document.getElementById('bulkActionForm').submit();
                });
            }
        </script>

    </main>
@endsection
