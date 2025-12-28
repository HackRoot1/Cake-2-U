@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Customer Report</h2>
            <small class="text-muted">Customer behavior and demographics (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>12,420</h3>
                    <p class="text-muted mb-0">Total customers</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>420</h3>
                    <p class="text-muted mb-0">New customers</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>34%</h3>
                    <p class="text-muted mb-0">Repeat buyers</p>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-3">
            <x-admin.card>
                <div class="text-center">
                    <h3>2.3k</h3>
                    <p class="text-muted mb-0">Top customers</p>
                </div>
            </x-admin.card>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <x-admin.card title="Acquisition sources">
                <x-admin.chart-placeholder label="Sources pie placeholder" height="180" />
            </x-admin.card>
        </div>
        <div class="col-md-6">
            <x-admin.card title="Customer lifetime value">
                <x-admin.chart-placeholder label="LTV distribution" height="180" />
            </x-admin.card>
        </div>
    </div>

    <div class="mt-3">
        <x-admin.card title="Top customers">
            <table class="table table-sm mb-0">
                <thead><tr><th>Customer</th><th>Orders</th><th>Total</th></tr></thead>
                <tbody>
                    <tr><td>Jane Doe</td><td>42</td><td>$12,400</td></tr>
                    <tr><td>John Smith</td><td>30</td><td>$8,200</td></tr>
                </tbody>
            </table>
        </x-admin.card>
    </div>
</div>
@endsection