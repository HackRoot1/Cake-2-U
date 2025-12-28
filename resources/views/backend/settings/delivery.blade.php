@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Delivery Settings</h2>
            <small class="text-muted">Delivery options and lead times (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'General', 'url' => route('admin.settings.general'), 'route' => 'admin.settings.general'],
        ['label' => 'Delivery', 'url' => route('admin.settings.delivery'), 'route' => 'admin.settings.delivery'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="Delivery options">
                <x-admin.toggle name="same_day" label="Enable same-day delivery" :checked="true" />
                <h6>Time slots</h6>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="slot1"><label class="form-check-label" for="slot1">Morning (8–12)</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="slot2"><label class="form-check-label" for="slot2">Afternoon (12–4)</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="slot3"><label class="form-check-label" for="slot3">Evening (4–8)</label></div>
                <div class="form-check"><input class="form-check-input" type="checkbox" id="slot4"><label class="form-check-label" for="slot4">Night (8–10)</label></div>

                <x-admin.input label="Holiday schedule (date)" name="holiday" type="date" />
                <x-admin.input label="Max order value for same-day" name="max_same_day" value="500" />
                <x-admin.input label="Min order value for free delivery" name="min_free_delivery" value="50" />
            </x-admin.card>

            <x-admin.card class="mt-3" title="Charge matrix">
                <p class="text-muted">Delivery charges can be configured by distance, order value or category (UI-only placeholder)</p>
                <table class="table table-sm mb-0"><thead><tr><th>Type</th><th>Rule</th></tr></thead><tbody><tr><td>Distance</td><td>$5/km</td></tr></tbody></table>
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Serviceable pincodes">
                <label class="form-label">Whitelist (comma separated)</label>
                <textarea class="form-control" rows="3">560001,560002</textarea>

                <label class="form-label mt-2">Blacklist (comma separated)</label>
                <textarea class="form-control" rows="3">560010</textarea>

                <x-admin.input label="Lead time (days)" name="lead_time" value="2" />
            </x-admin.card>
        </div>
    </div>
</div>
@endsection