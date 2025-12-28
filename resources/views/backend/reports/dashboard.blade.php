@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Reports Dashboard</h2>
            <small class="text-muted">Pre-built templates and quick insights (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-8">
            <div class="row g-3">
                <div class="col-md-4">
                    <x-admin.card title="Sales Trend" subtitle="Last 30 days">
                        <x-admin.chart-placeholder label="Line chart placeholder" height="120" />
                    </x-admin.card>
                </div>

                <div class="col-md-4">
                    <x-admin.card title="Orders vs Revenue" subtitle="Last 30 days">
                        <x-admin.chart-placeholder label="Bar chart placeholder" height="120" />
                    </x-admin.card>
                </div>

                <div class="col-md-4">
                    <x-admin.card title="Payment Methods" subtitle="Share by method">
                        <x-admin.chart-placeholder label="Pie chart placeholder" height="120" />
                    </x-admin.card>
                </div>

                <div class="col-12 mt-2">
                    <x-admin.card title="Recent Report Snapshots">
                        <table class="table table-sm mb-0">
                            <thead>
                                <tr><th>Report</th><th>Type</th><th>Created</th><th></th></tr>
                            </thead>
                            <tbody>
                                <tr><td>Monthly Sales</td><td>PDF</td><td>2025-12-25</td><td><a href="#" class="btn btn-sm btn-outline-secondary">Download</a></td></tr>
                                <tr><td>Top Products</td><td>Excel</td><td>2025-12-26</td><td><a href="#" class="btn btn-sm btn-outline-secondary">Download</a></td></tr>
                            </tbody>
                        </table>
                    </x-admin.card>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <x-admin.card title="Pre-built report templates">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.reports.sales') }}" class="btn btn-outline-primary">Sales Report</a>
                    <a href="{{ route('admin.reports.customers') }}" class="btn btn-outline-primary">Customer Report</a>
                    <a href="{{ route('admin.reports.products') }}" class="btn btn-outline-primary">Product Report</a>
                </div>

                <hr>
                <h6>Scheduled reports</h6>
                <p class="text-muted">2 scheduled reports — next: Monthly Sales (tomorrow)</p>
            </x-admin.card>
        </div>
    </div>

    {{-- Comments: Charts will be wired to data via controller and front-end chart library (Chart.js / ApexCharts) in a future iteration. --}}
</div>
@endsection