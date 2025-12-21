@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Create</strong> Coupon</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('coupons.index') }}" class="btn btn-secondary">Back to Coupons</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">New Coupon</h5>
                            <h6 class="card-subtitle text-muted">Create a new coupon by filling out the form below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('coupons.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="code" class="form-label">Coupon Code <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control text-uppercase" id="code"
                                            name="code" value="SAVE20" required
                                            oninput="this.value = this.value.toUpperCase();">
                                        <div class="small text-muted">Unique code (uppercase letters and numbers). Example:
                                            SAVE20</div>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select">
                                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active
                                            </option>
                                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>
                                                Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea name="description" id="description" class="form-control" rows="2">20% off on all items above ₹500</textarea>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Discount Type</label>
                                        <select name="discount_type" class="form-select">
                                            <option value="percentage" selected>Percentage (%)</option>
                                            <option value="fixed">Fixed (₹)</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="discount_value" class="form-label">Discount Value <span
                                                class="text-danger">*</span></label>
                                        <input type="number" step="0.01" min="0" name="discount_value"
                                            id="discount_value" class="form-control" value="20" required>
                                    </div>

                                    <div class="mb-3 col-md-4">
                                        <label for="max_discount" class="form-label">Max Discount (for %)</label>
                                        <input type="number" step="0.01" min="0" name="max_discount"
                                            id="max_discount" class="form-control" value="500">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5 class="card-title">Validity</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="start_date" class="form-label">Start Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="start_date" id="start_date" class="form-control"
                                            value="2025-01-01" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="end_date" class="form-label">End Date <span
                                                class="text-danger">*</span></label>
                                        <input type="date" name="end_date" id="end_date" class="form-control"
                                            value="2025-03-31" required>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label class="form-label">Activation / Expiry Time (optional)</label>
                                        <div class="d-flex gap-2">
                                            <input type="time" name="activation_time" class="form-control"
                                                value="09:00">
                                            <input type="time" name="expiry_time" class="form-control"
                                                value="23:59">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5 class="card-title">Usage Limits</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="usage_limit_total" class="form-label">Usage Limit (total)</label>
                                        <input type="number" min="0" name="usage_limit_total"
                                            id="usage_limit_total" class="form-control" value="1000">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="usage_limit_per_customer" class="form-label">Usage Limit per
                                            Customer</label>
                                        <input type="number" min="0" name="usage_limit_per_customer"
                                            id="usage_limit_per_customer" class="form-control" value="5">
                                    </div>
                                    <div class="mb-3 col-md-4 d-flex align-items-center">
                                        <label class="form-check-label me-2">
                                            <input type="checkbox" name="one_time" class="form-check-input">
                                            One-time use
                                        </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5 class="card-title">Applicability</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="applicability" class="form-label">Apply To</label>
                                        <select name="applicability" id="applicability" class="form-select">
                                            <option value="all" selected>All products</option>
                                            <option value="categories">Specific categories</option>
                                            <option value="products">Specific products</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="exclude_products" class="form-label">Exclude Products (IDs comma
                                            separated)</label>
                                        <input type="text" name="exclude_products" id="exclude_products"
                                            class="form-control" value="">
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="min_order_value" class="form-label">Minimum Order Value</label>
                                        <input type="number" step="0.01" name="min_order_value" id="min_order_value"
                                            class="form-control" value="500">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4">
                                        <label for="max_order_value" class="form-label">Maximum Order Value</label>
                                        <input type="number" step="0.01" name="max_order_value" id="max_order_value"
                                            class="form-control" value="10000">
                                    </div>
                                    <div class="mb-3 col-md-4 d-flex align-items-center">
                                        <label class="form-check-label me-2">
                                            <input type="checkbox" name="first_purchase_only" class="form-check-input">
                                            First purchase only
                                        </label>
                                    </div>
                                    <div class="mb-3 col-md-4 d-flex align-items-center">
                                        <label class="form-check-label me-2">
                                            <input type="checkbox" name="vip_only" class="form-check-input">
                                            VIP customers only
                                        </label>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <h5 class="card-title">Advanced Options</h5>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-4 d-flex align-items-center">
                                        <label class="form-check-label me-2">
                                            <input type="checkbox" name="free_shipping" class="form-check-input" checked>
                                            Free shipping
                                        </label>
                                    </div>
                                    <div class="mb-3 col-md-4 d-flex align-items-center">
                                        <label class="form-check-label me-2">
                                            <input type="checkbox" name="stack_with_other" class="form-check-input"
                                                checked>
                                            Stack with other coupons
                                        </label>
                                    </div>
                                    <div class="mb-3 col-md-4">
                                        <label for="user_segments" class="form-label">User segments / groups</label>
                                        <input type="text" name="user_segments" id="user_segments"
                                            class="form-control" value="VIP,Newsletter">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" name="action" value="publish" class="btn btn-primary">Save
                                        and publish</button>
                                    <button type="submit" name="action" value="draft"
                                        class="btn btn-outline-secondary">Save as draft</button>
                                    <button type="submit" name="action" value="add_another"
                                        class="btn btn-outline-success">Save and add another</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Basic client-side validation for coupon form
            const form = document.querySelector('form[action="{{ route('coupons.store') }}"]');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const code = document.getElementById('code');
                    const value = parseFloat(document.getElementById('discount_value').value || 0);
                    const start = document.getElementById('start_date').value;
                    const end = document.getElementById('end_date').value;
                    if (!code || !code.value.trim()) {
                        alert('Coupon code is required');
                        e.preventDefault();
                        return;
                    }
                    if (!(value > 0)) {
                        alert('Discount value must be greater than zero');
                        e.preventDefault();
                        return;
                    }
                    if (start && end && start > end) {
                        alert('End date must be after start date');
                        e.preventDefault();
                        return;
                    }
                });
            }
        });
    </script>
@endsection
