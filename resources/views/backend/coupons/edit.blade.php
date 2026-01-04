@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Edit</strong> Coupon</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Back to coupons</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Coupon</h5>
                            <h6 class="card-subtitle text-muted">Edit an existing coupon by updating the fields below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('coupons.update', $coupon->id ?? 0) }}">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="code" class="form-label">Coupon Code</label>
                                        <input type="text" class="form-control" id="code" name="code"
                                            value="SAVE20" readonly>
                                        <div class="small text-muted">Coupon code cannot be changed after creation.</div>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="active" selected>Active</option>
                                            <option value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="2">20% off on all items above ₹500</textarea>
                                    </div>
                                </div>

                                <!-- Discount & Validity fields (same as create) -->
                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Discount Type</label>
                                        <select name="discount_type" class="form-select">
                                            <option value="percentage" selected>Percentage (%)</option>
                                            <option value="fixed">Fixed (₹)</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="discount_value" class="form-label">Discount Value</label>
                                        <input type="number" step="0.01" min="0" name="discount_value"
                                            id="discount_value" class="form-control" value="20">
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="max_discount" class="form-label">Max Discount (for %)</label>
                                        <input type="number" step="0.01" min="0" name="max_discount"
                                            id="max_discount" class="form-control" value="500">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            value="2025-01-01">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                            value="2025-03-31">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('coupons.index') }}" class="btn btn-outline-secondary">Cancel</a>
                                </div>
                            </form>

                            <hr>

                            <h5>Usage History</h5>
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice Kumar</td>
                                            <td>2025-01-10</td>
                                            <td>₹50.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rahul Singh</td>
                                            <td>2025-02-05</td>
                                            <td>₹30.00</td>
                                        </tr>
                                        <tr>
                                            <td>Priya Patel</td>
                                            <td>2025-03-12</td>
                                            <td>₹154.50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
