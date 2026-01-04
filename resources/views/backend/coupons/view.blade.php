@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Coupon</strong> Details</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('coupons.index') }}" class="btn btn-secondary me-2">Back to coupons</a>
                    <div class="btn-group">
                        <a href="#edit" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-outline-warning">Deactivate</button>
                        <button type="button" class="btn btn-outline-danger"
                            onclick="if(confirm('Delete coupon and all related usage?')){alert('Deleted (sample)');}">Delete</button>
                        <a href="#" class="btn btn-outline-secondary">Export</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Coupon card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4 class="mt-3 mb-0">SAVE20</h4>
                            <div class="small text-muted mb-2">20% off on all items above ₹500</div>

                            <div class="mb-2">
                                <span class="badge bg-success">Active</span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('coupons.edit', 1) }}" class="btn btn-primary">Edit Coupon</a>
                                <a href="#" class="btn btn-outline-info">Send Promo</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Validity</strong>
                                <div class="small text-muted mt-1">2025-01-01 → 2025-03-31</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Discount</strong>
                                <div class="small text-muted mt-1">Percentage — 20%</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Usage</strong>
                                <div class="small text-muted mt-1">Total uses: 150<br>Limit: 1000</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Performance card -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Performance</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="h4 mb-0">150</div>
                                    <div class="small text-muted">Total Uses</div>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="h4 mb-0">₹1,234.50</div>
                                    <div class="small text-muted">Total Discount Given</div>
                                </div>
                            </div>

                            <hr>
                            <canvas id="couponUsageChart" height="240"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Customers who used this coupon</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">Export list</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th class="text-end">Amount Discounted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice Kumar</td>
                                            <td>2025-01-10</td>
                                            <td class="text-end">₹50.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rahul Singh</td>
                                            <td>2025-02-05</td>
                                            <td class="text-end">₹30.00</td>
                                        </tr>
                                        <tr>
                                            <td>Priya Patel</td>
                                            <td>2025-03-12</td>
                                            <td class="text-end">₹154.50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Order Summary</h6>

                            <div class="row text-center g-2 mt-3">
                                <div class="col-4">
                                    <div class="h4 mb-0">8</div>
                                    <div class="small text-muted">Total Orders</div>
                                </div>
                                <div class="col-4">
                                    <div class="h4 mb-0">₹4,567.89</div>
                                    <div class="small text-muted">Total Spent</div>
                                </div>
                                <div class="col-4">
                                    <div class="h4 mb-0">₹570.99</div>
                                    <div class="small text-muted">Avg Order</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Orders list -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Order History</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">View All Orders</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th class="text-end">Total</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>#2001</td>
                                            <td>2025-03-12</td>
                                            <td>Delivered</td>
                                            <td class="text-end">₹1,234.50</td>
                                            <td class="text-end"><a href="#"
                                                    class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#2000</td>
                                            <td>2025-02-05</td>
                                            <td>Returned</td>
                                            <td class="text-end">₹0.00</td>
                                            <td class="text-end"><a href="#"
                                                    class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#1999</td>
                                            <td>2025-01-10</td>
                                            <td>Delivered</td>
                                            <td class="text-end">₹154.50</td>
                                            <td class="text-end"><a href="#"
                                                    class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Internal Notes</h5>
                            <a href="#addNote" class="btn btn-sm btn-outline-primary">Add Note</a>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="small text-muted">2025-03-12 10:00 —
                                        <strong>Admin</strong>
                                    </div>
                                    <div class="mt-1">Coupon distribution started for campaign
                                        SPRING25.
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="small text-muted">2025-02-01 09:15 —
                                        <strong>Marketing</strong>
                                    </div>
                                    <div class="mt-1">Updated coupon terms and minimum order
                                        value.</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
