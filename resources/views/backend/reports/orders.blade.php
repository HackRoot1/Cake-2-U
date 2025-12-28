@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Order Report</h2>
            <small class="text-muted">Order trends and fulfillment (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>5,420</h3><p class="text-muted mb-0">Orders</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>2.1 days</h3><p class="text-muted mb-0">Avg fulfillment time</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>6%</h3><p class="text-muted mb-0">Cancellation rate</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>4%</h3><p class="text-muted mb-0">Return rate</p></div></x-admin.card></div>
    </div>

    <x-admin.card title="Order trend">
        <x-admin.chart-placeholder label="Order trend chart" height="200" />
    </x-admin.card>

    <div class="row mt-3">
        <div class="col-md-6"><x-admin.card title="Orders by status"><x-admin.chart-placeholder label="Status pie" height="160" /></x-admin.card></div>
        <div class="col-md-6"><x-admin.card title="Fulfillment time analysis"><x-admin.chart-placeholder label="Fulfillment chart" height="160" /></x-admin.card></div>
    </div>
</div>
@endsection