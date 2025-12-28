@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Custom Report Builder</h2>
            <small class="text-muted">Drag & drop metrics, filters and chart types (UI-only)</small>
        </div>
        <div>
            <x-admin.report-filters />
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <x-admin.card title="Metrics">
                <div class="list-group">
                    <div class="list-group-item">Total sales</div>
                    <div class="list-group-item">Orders</div>
                    <div class="list-group-item">Average order value</div>
                    <div class="list-group-item">New customers</div>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-4">
            <x-admin.card title="Filters">
                <div class="mb-2">Category</div>
                <select class="form-select"><option>All</option></select>
                <div class="mt-2">Customer</div>
                <select class="form-select"><option>All</option></select>
            </x-admin.card>
        </div>
        <div class="col-md-4">
            <x-admin.card title="Chart type">
                <select class="form-select mb-2"><option>Line</option><option>Bar</option><option>Pie</option><option>Table</option></select>
                <button class="btn btn-primary">Preview</button>
            </x-admin.card>
        </div>
    </div>

    <div class="mt-3 d-flex gap-2">
        <button class="btn btn-outline-secondary">Save report template</button>
        <button class="btn btn-primary">Run report</button>
        <button class="btn btn-outline-secondary">Schedule</button>
    </div>

    {{-- Comments: Drag & drop and template saving would be implemented using JavaScript (Sortable / Interact) and backend storage later. --}}
</div>
@endsection