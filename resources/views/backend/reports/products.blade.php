@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Product Report</h2>
            <small class="text-muted">Performance and inventory (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>1,320</h3>
                    <p class="text-muted mb-0">Total products</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>Top: Wireless Mouse</h3>
                    <p class="text-muted mb-0">Best-selling</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>Low stock: 24</h3>
                    <p class="text-muted mb-0">Products low in stock</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>Avg rating: 4.2</h3>
                    <p class="text-muted mb-0">Product ratings</p>
                </div>
            </x-admin.card>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <x-admin.card title="Best-selling products">
                <table class="table table-sm mb-0">
                    <thead><tr><th>Product</th><th>Qty</th><th>Revenue</th></tr></thead>
                    <tbody>
                        <tr><td>Wireless Mouse</td><td>230</td><td>$3,450</td></tr>
                        <tr><td>Headphones</td><td>120</td><td>$4,200</td></tr>
                    </tbody>
                </table>
            </x-admin.card>
        </div>
        <div class="col-md-6">
            <x-admin.card title="Stock value analysis">
                <x-admin.chart-placeholder label="Stock value chart" height="180" />
            </x-admin.card>
        </div>
    </div>
</div>
@endsection