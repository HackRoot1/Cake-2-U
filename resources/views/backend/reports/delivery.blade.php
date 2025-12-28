@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Delivery Report</h2>
            <small class="text-muted">Delivery KPIs and courier performance (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>92%</h3><p class="text-muted mb-0">On-time deliveries</p></div></x-admin.card></div>
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>1.8 days</h3><p class="text-muted mb-0">Avg delivery time</p></div></x-admin.card></div>
        <div class="col-md-4"><x-admin.card><div class="text-center"><h3>24</h3><p class="text-muted mb-0">Delivery complaints</p></div></x-admin.card></div>
    </div>

    <x-admin.card title="Courier performance">
        <x-admin.chart-placeholder label="Courier comparison" height="160" />
    </x-admin.card>
</div>
@endsection