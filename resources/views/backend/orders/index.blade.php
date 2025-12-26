@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Orders</strong> Dashboard</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('orders.create') }}" class="btn btn-primary">New Order</a>
                </div>
            </div>

            <!-- Summary -->
            <div class="row mb-3">
                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Total Orders</h6>
                            <div class="h3 mb-0">1,245</div>
                            <div class="small text-muted">Placed</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Total Spent</h6>
                            <div class="h3 mb-0">$289,430</div>
                            <div class="small text-muted">All customers</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Avg Order Value</h6>
                            <div class="h3 mb-0">$232</div>
                            <div class="small text-muted">Average</div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Last Order</h6>
                            <div class="h3 mb-0">2025-12-20</div>
                            <div class="small text-muted">Most recent</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters and tabs -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs mb-3">
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == null ? 'active' : '' }}" href="{{ route('orders.index', request()->except('status')) }}">All Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'processing' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'processing'])) }}">Processing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'pending' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'pending'])) }}">Pending</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'shipped' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'shipped'])) }}">Shipped</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'returned' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'returned'])) }}">Returned</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'delivered' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'delivered'])) }}">Delivered</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request('status') == 'cancelled' ? 'active' : '' }}" href="{{ route('orders.index', array_merge(request()->except('status'), ['status' => 'cancelled'])) }}">Cancelled</a>
                                </li>
                            </ul>

                            <div class="bg-light border rounded p-3 mb-3 filter-bar">
                                <form method="GET" class="row g-2">
                                    <div class="col-12 col-md-4">
                                        <div class="input-group">
                                            <span class="input-group-text">🔍</span>
                                            <input type="search" name="search" class="form-control" placeholder="Search by order #, customer, or email" value="{{ request('search') }}">
                                        </div>
                                    </div>

                                    <div class="col-6 col-md-2">
                                        <select name="customer" class="form-select">
                                            <option value="">Any customer</option>
                                            <option value="1" {{ request('customer') == '1' ? 'selected' : '' }}>John Doe</option>
                                            <option value="2" {{ request('customer') == '2' ? 'selected' : '' }}>Jane Smith</option>
                                            <option value="3" {{ request('customer') == '3' ? 'selected' : '' }}>Acme Corp</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-2">
                                        <select name="payment_status" class="form-select">
                                            <option value="">Any payment</option>
                                            <option value="pending" {{ request('payment_status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="completed" {{ request('payment_status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                            <option value="failed" {{ request('payment_status') == 'failed' ? 'selected' : '' }}>Failed</option>
                                            <option value="refunded" {{ request('payment_status') == 'refunded' ? 'selected' : '' }}>Refunded</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-2">
                                        <select name="delivery_status" class="form-select">
                                            <option value="">Any delivery</option>
                                            <option value="pending">Pending</option>
                                            <option value="processing">Processing</option>
                                            <option value="shipped">Shipped</option>
                                            <option value="delivered">Delivered</option>
                                            <option value="cancelled">Cancelled</option>
                                            <option value="returned">Returned</option>
                                        </select>
                                    </div>

                                    <div class="col-6 col-md-1">
                                        <input type="number" step="0.01" name="amount_min" class="form-control me-2" placeholder="Min $" value="{{ request('amount_min') }}">
                                    </div>
                                    <div class="col-6 col-md-1">
                                        <input type="number" step="0.01" name="amount_max" class="form-control" placeholder="Max $" value="{{ request('amount_max') }}">
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <input type="date" name="date_from" class="form-control me-2" value="{{ request('date_from') }}">
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                                    </div>

                                    <div class="col-12 col-md-2">
                                        <select name="sort" class="form-select me-2">
                                            <option value="date_desc" {{ request('sort') == 'date_desc' ? 'selected' : '' }}>Order Date (Newest)</option>
                                            <option value="date_asc" {{ request('sort') == 'date_asc' ? 'selected' : '' }}>Order Date (Oldest)</option>
                                            <option value="amount_desc" {{ request('sort') == 'amount_desc' ? 'selected' : '' }}>Amount (High-Low)</option>
                                            <option value="amount_asc" {{ request('sort') == 'amount_asc' ? 'selected' : '' }}>Amount (Low-High)</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-md-2">
                                        <button type="submit" class="btn btn-primary">Apply</button>
                                    </div>

                                    <div class="col-12 mt-2 small text-muted">Tip: combine multiple filters to narrow results quickly.</div>
                                </form>
                            </div>

                            <!-- Orders list with bulk actions -->
                            <div class="d-flex justify-content-between mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">Bulk Actions</button>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <form method="POST" action="{{ route('orders.bulk') }}" class="px-3 py-2">
                                                    @csrf
                                                    <input type="hidden" name="action" value="status_update">
                                                    <button class="btn btn-sm btn-link">Bulk update status</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('orders.bulk') }}" class="px-3 py-2">
                                                    @csrf
                                                    <input type="hidden" name="action" value="cancel">
                                                    <button class="btn btn-sm btn-link text-danger">Bulk cancel</button>
                                                </form>
                                            </li>
                                            <li>
                                                <form method="POST" action="{{ route('orders.bulk') }}" class="px-3 py-2">
                                                    @csrf
                                                    <input type="hidden" name="action" value="refund">
                                                    <button class="btn btn-sm btn-link">Bulk refund</button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="small text-muted">Showing 1-10 of 1,245 orders</div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover align-middle">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Order Date</th>
                                            <th>Items</th>
                                            <th>Total</th>
                                            <th>Payment</th>
                                            <th>Delivery</th>
                                            <th>Delivery Date</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="checkbox" class="rowCheckbox"></td>
                                            <td><a href="{{ route('orders.show', 2001) }}">#2001</a></td>
                                            <td>John Doe<br><a href="mailto:johndoe@example.com">johndoe@example.com</a></td>
                                            <td>2025-12-20 14:10</td>
                                            <td>2</td>
                                            <td>$122.50</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td><span class="badge bg-info text-dark">Processing</span></td>
                                            <td>—</td>
                                            <td class="text-end">
                                                <a href="{{ route('orders.show', 2001) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                <a href="{{ route('orders.edit', 2001) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                                <form method="POST" action="{{ route('orders.print', 2001) }}" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-sm btn-outline-dark">Print</button>
                                                </form>
                                                <button class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#cancelModal" data-id="2001">Cancel</button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" class="rowCheckbox"></td>
                                            <td><a href="{{ route('orders.show', 2002) }}">#2002</a></td>
                                            <td>Jane Smith<br><a href="mailto:janesmith@example.com">janesmith@example.com</a></td>
                                            <td>2025-12-18 09:32</td>
                                            <td>1</td>
                                            <td>$59.00</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td><span class="badge bg-info text-dark">Shipped</span></td>
                                            <td>2025-12-23</td>
                                            <td class="text-end">
                                                <a href="{{ route('orders.show', 2002) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                <form method="POST" action="{{ route('orders.track', 2002) }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-secondary">Track</button>
                                                </form>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><input type="checkbox" class="rowCheckbox"></td>
                                            <td><a href="{{ route('orders.show', 2003) }}">#2003</a></td>
                                            <td>Acme Corp<br><a href="mailto:orders@acme.example">orders@acme.example</a></td>
                                            <td>2025-12-15 11:05</td>
                                            <td>4</td>
                                            <td>$420.00</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td><span class="badge bg-success">Delivered</span></td>
                                            <td>2025-12-18</td>
                                            <td class="text-end">
                                                <a href="{{ route('orders.show', 2003) }}" class="btn btn-sm btn-outline-primary">View</a>
                                                <form method="POST" action="{{ route('orders.reorder', 2003) }}" class="d-inline">
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-outline-success">Reorder</button>
                                                </form>
                                                <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#refundModal" data-id="2003" data-amount="420.00">Refund</button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Empty state (example) -->
                            @if(false)
                                <div class="text-center p-5">
                                    <h4>No orders yet</h4>
                                    <p class="text-muted">You currently have no orders. Start shopping to create your first order.</p>
                                    <a href="#" class="btn btn-primary">Start Shopping</a>

                                    <hr class="my-4">
                                    <h6>Featured Products</h6>
                                    <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset('img/products/product-1.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="{{ asset('img/products/product-2.jpg') }}" class="d-block w-100" alt="...">
                                            </div>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            @endif

                        </div>

                        <!-- Modals -->
                        <div class="modal fade" id="cancelModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('orders.cancel', 0) }}" id="cancelForm">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Cancel Order</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="order_id" id="cancelOrderId">
                                            <div class="mb-3">
                                                <label class="form-label">Reason</label>
                                                <select name="reason" class="form-select">
                                                    <option>Customer request</option>
                                                    <option>Payment failed</option>
                                                    <option>Out of stock</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Notes</label>
                                                <textarea name="notes" class="form-control" rows="3"></textarea>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" name="refund_if_paid" class="form-check-input" id="refundIfPaid">
                                                <label class="form-check-label" for="refundIfPaid">Process refund if payment completed</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Cancel Order</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="modal fade" id="refundModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog">
                                <form method="POST" action="{{ route('orders.refund', 0) }}" id="refundForm">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Process Refund</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="hidden" name="order_id" id="refundOrderId">
                                            <div class="mb-3">
                                                <label class="form-label">Refund amount</label>
                                                <input type="number" step="0.01" name="amount" class="form-control" id="refundAmount">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Method</label>
                                                <select name="method" class="form-select">
                                                    <option>Original payment method</option>
                                                    <option>Store credit</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Reason</label>
                                                <select name="reason" class="form-select">
                                                    <option>Customer request</option>
                                                    <option>Product damaged</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Notes</label>
                                                <textarea name="notes" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Process Refund</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                // Select all rows
                                document.getElementById('selectAllRows').addEventListener('change', function (e) {
                                    document.querySelectorAll('.rowCheckbox').forEach(cb => cb.checked = e.target.checked);
                                });

                                // Cancel modal: populate form action and order id
                                var cancelModal = document.getElementById('cancelModal');
                                cancelModal.addEventListener('show.bs.modal', function (event) {
                                    var button = event.relatedTarget;
                                    var id = button.getAttribute('data-id');
                                    document.getElementById('cancelOrderId').value = id;
                                    document.getElementById('cancelForm').action = '{{ url("/admin/orders/cancel") }}/' + id;
                                });

                                // Refund modal
                                var refundModal = document.getElementById('refundModal');
                                refundModal.addEventListener('show.bs.modal', function (event) {
                                    var button = event.relatedTarget;
                                    var id = button.getAttribute('data-id');
                                    var amount = button.getAttribute('data-amount') || '';
                                    document.getElementById('refundOrderId').value = id;
                                    document.getElementById('refundAmount').value = amount;
                                    document.getElementById('refundForm').action = '{{ url("/admin/orders/refund") }}/' + id;
                                });
                            });
                        </script>

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
