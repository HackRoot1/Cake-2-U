@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Customer Feedback Report</h2>
            <small class="text-muted">Ratings and sentiment (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>4.3</h3><p class="text-muted mb-0">Average rating</p></div></x-admin.card></div>
        <div class="col-md-3"><x-admin.card><div class="text-center"><h3>1,120</h3><p class="text-muted mb-0">Reviews</p></div></x-admin.card></div>
        <div class="col-md-6"><x-admin.card title="Review sentiment"><x-admin.chart-placeholder label="Sentiment placeholder" height="120" /></x-admin.card></div>
    </div>

    <div class="mt-3">
        <x-admin.card title="Top rated products">
            <table class="table table-sm mb-0"><thead><tr><th>Product</th><th>Rating</th></tr></thead><tbody><tr><td>Product X</td><td>4.9</td></tr></tbody></table>
        </x-admin.card>
    </div>
</div>
@endsection