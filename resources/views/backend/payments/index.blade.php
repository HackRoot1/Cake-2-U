@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Payment Management</h1>
                    <div>
                        <a href="/admin/payments/create" class="btn btn-primary">New Transaction</a>
                    </div>
                </div>
            </div>

            <!-- Filters -->
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                            <form class="row g-2">
                                <div class="col-md-4">
                                    <input type="text" class="form-control"
                                        placeholder="Search by Transaction ID, Order ID or Customer">
                                </div>

                                <div class="col-md-2">
                                    <input type="date" class="form-control" placeholder="From">
                                </div>
                                <div class="col-md-2">
                                    <input type="date" class="form-control" placeholder="To">
                                </div>

                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option value="">All Methods</option>
                                        <option>Card</option>
                                        <option>UPI</option>
                                        <option>Net Banking</option>
                                        <option>Wallet</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option value="">All Statuses</option>
                                        <option>Completed</option>
                                        <option>Pending</option>
                                        <option>Failed</option>
                                        <option>Refunded</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <input type="number" class="form-control" placeholder="Min Amount">
                                </div>
                                <div class="col-md-2">
                                    <input type="number" class="form-control" placeholder="Max Amount">
                                </div>

                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option>Date (Newest)</option>
                                        <option>Date (Oldest)</option>
                                        <option>Amount (High-Low)</option>
                                    </select>
                                </div>

                                <div class="col-md-2">
                                    <select class="form-select">
                                        <option>10 per page</option>
                                        <option>25 per page</option>
                                        <option>50 per page</option>
                                    </select>
                                </div>

                                <div class="col-md-2 d-grid">
                                    <button type="button" class="btn btn-primary">Apply</button>
                                </div>
                                <div class="col-md-2 d-grid">
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transactions Table -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Transaction ID</th>
                                            <th>Order #</th>
                                            <th>Customer</th>
                                            <th>Amount (₹)</th>
                                            <th>Method</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>txn_0001</td>
                                            <td><a href="{{ route('payments.view', 1) }}">ORD-1001</a></td>
                                            <td>John Doe</td>
                                            <td>₹ 2,499.00</td>
                                            <td>Card</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                            <td>2025-12-20 10:32</td>
                                            <td>
                                                <a href="{{ route('payments.view', 1) }}"
                                                    class="btn btn-sm btn-outline-primary">View</a>
                                                <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                                    data-bs-target="#refundModal" data-txn="txn_0001">Refund</button>
                                                <a href="{{ route('payments.receipt', 1) }}" class="btn btn-sm btn-outline-secondary">Receipt</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>txn_0002</td>
                                            <td><a href="{{ route('payments.view', 1) }}">ORD-1002</a></td>
                                            <td>Jane Smith</td>
                                            <td>₹ 599.00</td>
                                            <td>UPI</td>
                                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                                            <td>2025-12-21 11:12</td>
                                            <td>
                                                <a href="{{ route('payments.view', 1) }}"
                                                    class="btn btn-sm btn-outline-primary">View</a>
                                                <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"
                                                    data-bs-target="#refundModal" data-txn="txn_0002">Refund</button>
                                                <a href="#" class="btn btn-sm btn-outline-secondary">Receipt</a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>txn_0003</td>
                                            <td><a href="{{ route('payments.view', 1) }}">ORD-1003</a></td>
                                            <td>Akash Kumar</td>
                                            <td>₹ 199.00</td>
                                            <td>Wallet</td>
                                            <td><span class="badge bg-danger">Failed</span></td>
                                            <td>2025-12-22 09:45</td>
                                            <td>
                                                <a href="{{ route('payments.view', 1) }}"
                                                    class="btn btn-sm btn-outline-primary">View</a>
                                                <button class="btn btn-sm btn-outline-secondary" disabled>Refund</button>
                                                <a href="#" class="btn btn-sm btn-outline-secondary">Receipt</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="d-flex align-items-center justify-content-between mt-3">
                                <div>
                                    Showing 1 to 10 of 32 entries
                                </div>
                                <nav>
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                                        <li class="page-item active"><a class="page-link">1</a></li>
                                        <li class="page-item"><a class="page-link">2</a></li>
                                        <li class="page-item"><a class="page-link">3</a></li>
                                        <li class="page-item"><a class="page-link">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Refund Modal -->
        <div class="modal fade" id="refundModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Process Refund</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Transaction ID</label>
                                <input type="text" class="form-control" id="refund-txn" readonly>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label">Refund Amount (₹)</label>
                                    <input type="number" class="form-control" value="0">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Refund Method</label>
                                    <select class="form-select">
                                        <option>Original payment method</option>
                                        <option>Store credit</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3 mt-3">
                                <label class="form-label">Reason</label>
                                <select class="form-select">
                                    <option>Customer request</option>
                                    <option>Quality issue</option>
                                    <option>Cancellation</option>
                                    <option>Return</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Additional notes</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Process Refund</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
