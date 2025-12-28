@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Inventory Report</h2>
            <small class="text-muted">Stock overview and alerts (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>12,400</h3><p class="text-muted mb-0">Stock value</p></div></x-admin.card></div>
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>84</h3><p class="text-muted mb-0">Low stock SKUs</p></div></x-admin.card></div>
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>32%</h3><p class="text-muted mb-0">Stock turnover ratio</p></div></x-admin.card></div>
    </div>

    <x-admin.card title="Warehouse overview">
        <x-admin.chart-placeholder label="Warehouse placeholder" height="160" />
    </x-admin.card>

    <div class="mt-3">
        <x-admin.card title="Expiring soon products">
            <table class="table table-sm mb-0"><thead><tr><th>Product</th><th>Expires</th></tr></thead><tbody><tr><td>Product A</td><td>2026-01-10</td></tr></tbody></table>
        </x-admin.card>
    </div>
</div>
@endsection