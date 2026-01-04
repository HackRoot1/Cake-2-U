@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Customer</strong> Profile</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary me-2">Back to customers</a>

                    <div class="btn-group">
                        <a href="{{ route('customers.edit', 1) }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-outline-primary" onclick="window.location='#sendPromo'">Send Promo</button>
                        <button class="btn btn-outline-dark">Block</button>

                        <div class="btn-group ms-2">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <button class="dropdown-item text-danger" onclick="return confirm('Delete customer and all related data?')">Delete Customer</button>
                                </li>
                                <li><a class="dropdown-item" href="#">Export Data</a></li>
                                <li><a class="dropdown-item" href="#merge">Merge Duplicates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Profile card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="/img/avatars/avatar.jpg" alt="Profile" class="rounded-circle img-fluid" style="width:120px;height:120px;object-fit:cover;">

                            <h4 class="mt-3 mb-0">Jane Smith</h4>
                            <div class="small text-muted mb-2">jane.smith@example.com</div>

                            <div class="mb-2">
                                    <span class="badge bg-success">Active</span>
                                </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('customers.edit', 1) }}" class="btn btn-primary">Edit Customer</a>
                                <button class="btn btn-outline-info" onclick="location.href='#addCredit'">Add Credit / Discount</button>
                                <button class="btn btn-outline-warning" onclick="location.href='#sendPromo'">Send Promotional Message</button>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Contact</strong>
                                <div class="small text-muted mt-1">
                                    Email: <a href="mailto:jane.smith@example.com">jane.smith@example.com</a><br>
                                    Phone: <a href="tel:+15559876543">+1 (555) 987-6543</a>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Account</strong>
                                <div class="small text-muted mt-1">
                                    Registered: 2023-04-15<br>
                                    Last Login: 2025-12-31 18:45
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Loyalty</strong>
                                <div class="small text-muted mt-1">Points: <strong>450</strong></div>
                            </li>

                            <li class="list-group-item">
                                <strong>Referral</strong>
                                <div class="small text-muted mt-1">Referred by: Alex Johnson</div>
                            </li>
                        </ul>
                    </div>

                    <!-- Saved addresses -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Saved Addresses</h5>
                        </div>
                        <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-bold">Home</div>
                                            <div class="small text-muted">123 Main St, Springfield 12345</div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="fw-bold">Work</div>
                                            <div class="small text-muted">456 Office Rd, Springfield 12345</div>
                                        </div>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </div>

                    <!-- Payment methods -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Payment Methods</h5>
                        </div>
                        <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="small">
                                            VISA •••• 4242 <span class="text-muted">(Exp 12/2026)</span>
                                        </div>
                                        <div>
                                            <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Summary cards -->
                    <div class="row mb-3">
                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Order Summary</h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="h4 mb-0">12</div>
                                            <div class="small text-muted">Total Orders</div>
                                        </div>
                                        <div class="text-end">
                                            <div class="h5 mb-0">₹12,345.67</div>
                                            <div class="small text-muted">Total Spent</div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between">
                                        <div class="small text-muted">Avg order</div>
                                        <div class="small">₹1,028.81</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Most used delivery</h6>
                                    <div class="small text-muted">123 Main St, Springfield</div>

                                    <hr>
                                    <h6 class="card-title">Rewards</h6>
                                    <div class="small text-muted">Balance: <strong>450</strong></div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                            <td>#1001</td>
                                            <td>2025-12-31</td>
                                            <td>Delivered</td>
                                            <td class="text-end">₹1,234.50</td>
                                            <td class="text-end"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#1000</td>
                                            <td>2025-11-15</td>
                                            <td>Cancelled</td>
                                            <td class="text-end">₹0.00</td>
                                            <td class="text-end"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>#999</td>
                                            <td>2025-10-01</td>
                                            <td>Processing</td>
                                            <td class="text-end">₹2,345.00</td>
                                            <td class="text-end"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Notes & Contact history -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card mb-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Internal Notes</h5>
                                    <a href="#addNote" class="btn btn-sm btn-outline-primary">Add Note</a>
                                </div>
                                <div class="card-body">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="small text-muted">2025-12-31 18:00 — <strong>Admin</strong></div>
                                                <div class="mt-1">Customer requested delivery time change.</div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="small text-muted">2025-11-20 09:15 — <strong>Support</strong></div>
                                                <div class="mt-1">Resolved refund for order #1000.</div>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card mb-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Contact History</h5>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Send Message</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Type</th>
                                                    <th>Summary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2025-12-31</td>
                                                    <td>Email</td>
                                                    <td>Sent promo code WINTER25</td>
                                                </tr>
                                                <tr>
                                                    <td>2025-11-15</td>
                                                    <td>Phone</td>
                                                    <td>Caller reported missing item in order #1000</td>
                                                </tr>
                                            </tbody>
                                        </table>
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