@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Payment Report</h2>
            <small class="text-muted">Transactions and failures (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>24,120</h3><p class="text-muted mb-0">Transactions</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>2%</h3><p class="text-muted mb-0">Failed payments</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>$1,240</h3><p class="text-muted mb-0">Refunds</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>120ms</h3><p class="text-muted mb-0">Processing time</p></div></x-admin.card></div>
    </div>

    <x-admin.card title="Payment method breakdown">
        <x-admin.chart-placeholder label="Payment method pie placeholder" height="180" />
    </x-admin.card>
</div>
@endsection