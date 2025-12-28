@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Transaction Details</h1>
                <div>
                    <a href="/admin/payments" class="btn btn-outline-secondary">Back to List</a>
                    <a href="{{ route('payments.webhooks') }}" class="btn btn-primary">Download Receipt</a>
                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#refundModal">Process
                        Refund</button>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Transaction <small class="text-muted">txn_0001</small></h5>
                            <p><strong>Order:</strong> <a href="#">ORD-1001</a></p>
                            <p><strong>Customer:</strong> John Doe (john@example.com)</p>
                            <hr>
                            <h6>Payment Details</h6>
                            <div class="row">
                                <div class="col-md-4"><strong>Amount</strong>
                                    <div>₹ 2,499.00</div>
                                </div>
                                <div class="col-md-4"><strong>Method</strong>
                                    <div>Card</div>
                                </div>
                                <div class="col-md-4"><strong>Gateway</strong>
                                    <div>Razorpay</div>
                                </div>
                                <div class="col-md-4 mt-3"><strong>Date & Time</strong>
                                    <div>2025-12-20 10:32</div>
                                </div>
                                <div class="col-md-4 mt-3"><strong>Status</strong>
                                    <div><span class="badge bg-success">Completed</span></div>
                                </div>
                                <div class="col-md-4 mt-3"><strong>Card</strong>
                                    <div>Visa ending with •••• 4242</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>Order Details</h6>
                            <p><strong>Order:</strong> ORD-1001 (2025-12-19)</p>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th class="text-end">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Chocolate Cake (1 Kg)</td>
                                        <td>1</td>
                                        <td class="text-end">₹ 1,499.00</td>
                                    </tr>
                                    <tr>
                                        <td>Birthday Candles</td>
                                        <td>1</td>
                                        <td class="text-end">₹ 99.00</td>
                                    </tr>
                                    <tr>
                                        <td>Delivery</td>
                                        <td></td>
                                        <td class="text-end">₹ 100.00</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Total</th>
                                        <th class="text-end">₹ 1,698.00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>Refunds</h6>
                            <p>No refunds processed for this transaction.</p>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>Quick Info</h6>
                            <p><strong>Transaction ID:</strong> txn_0001</p>
                            <p><strong>Order #:</strong> ORD-1001</p>
                            <p><strong>Customer:</strong> John Doe</p>
                            <p><strong>Amount:</strong> ₹ 2,499.00</p>
                            <p><strong>Status:</strong> <span class="badge bg-success">Completed</span></p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <h6>Actions</h6>
                            <a href="#" class="btn btn-outline-primary w-100 mb-2">Download Receipt</a>
                            <a href="#" class="btn btn-outline-secondary w-100 mb-2">View Order</a>
                            <button class="btn btn-outline-danger w-100" data-bs-toggle="modal"
                                data-bs-target="#refundModal">Process Refund</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Refund Modal (same as index) -->
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
                            <input type="text" class="form-control" value="txn_0001" readonly>
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
@endsection
