@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Sales Report</h2>
            <small class="text-muted">Summary and trend (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <x-admin.card>
                <div class="text-center">
                    <h3>$23,540</h3>
                    <p class="text-muted mb-0">Total sales (period)</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-4">
            <x-admin.card>
                <div class="text-center">
                    <h3>1,230</h3>
                    <p class="text-muted mb-0">Orders</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-4">
            <x-admin.card>
                <div class="text-center">
                    <h3>$19.12</h3>
                    <p class="text-muted mb-0">Average order value</p>
                </div>
            </x-admin.card>
        </div>
    </div>

    <x-admin.card title="Sales trend">
        <x-admin.chart-placeholder label="Sales trend chart placeholder" height="200" />
    </x-admin.card>

    <div class="row mt-3">
        <div class="col-md-6">
            <x-admin.card title="Sales by Category">
                <table class="table table-sm mb-0">
                    <thead><tr><th>Category</th><th>Revenue</th></tr></thead>
                    <tbody><tr><td>Electronics</td><td>$8,230</td></tr><tr><td>Home</td><td>$5,100</td></tr></tbody>
                </table>
            </x-admin.card>
        </div>
        <div class="col-md-6">
            <x-admin.card title="Sales by Product">
                <table class="table table-sm mb-0">
                    <thead><tr><th>Product</th><th>Qty</th><th>Revenue</th></tr></thead>
                    <tbody><tr><td>Wireless Mouse</td><td>230</td><td>$3,450</td></tr><tr><td>Coffee Mug</td><td>120</td><td>$1,440</td></tr></tbody>
                </table>
            </x-admin.card>
        </div>
    </div>

    {{-- Schedule modal (UI-only) --}}
    <x-admin.modal-form id="scheduleReportModal" title="Schedule Report" size="md">
        <div class="mb-3">
            <label class="form-label">Frequency</label>
            <select class="form-select">
                <option>Daily</option>
                <option>Weekly</option>
                <option>Monthly</option>
            </select>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="emailDelivery">
                <label class="form-check-label" for="emailDelivery">Email delivery</label>
            </div>
        </div>
    </x-admin.modal-form>

    <div class="d-flex gap-2 mt-3">
        <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#scheduleReportModal">Schedule report</button>
        <button class="btn btn-primary">Export</button>
    </div>

</div>
@endsection