@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">API Settings</h2>
            <small class="text-muted">API keys, rate limits and webhooks (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'API', 'url' => route('admin.settings.api'), 'route' => 'admin.settings.api'],
    ]" />

    <x-admin.card title="API documentation">
        <p class="text-muted">Read-only link to API docs (placeholder)</p>
        <a href="#" class="btn btn-outline-secondary">Open API Docs</a>
    </x-admin.card>

    <div class="row mt-3 g-3">
        <div class="col-md-6">
            <x-admin.card title="Rate limiting">
                <x-admin.input label="Requests per minute" name="rpm" value="60" />
                <x-admin.input label="Burst limit" name="burst" value="120" />
            </x-admin.card>

            <x-admin.card class="mt-3" title="API Keys">
                <table class="table table-sm mb-0"><thead><tr><th>Key</th><th>Created</th><th></th></tr></thead>
                <tbody><tr><td>sk_live_abc123</td><td>2025-12-01</td><td><button class="btn btn-sm btn-outline-secondary">Regen</button> <button class="btn btn-sm btn-danger">Delete</button></td></tr></tbody></table>
                <div class="mt-2"><button class="btn btn-sm btn-primary">Create key</button></div>
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Webhooks">
                <x-admin.input label="Webhook URL" name="api_webhook" value="https://example.com/api/webhook" />
                <x-admin.input label="Secret" name="api_secret" value="****" />
                <p class="text-muted">Webhook setup instructions and test tools will be added in a future iteration.</p>
            </x-admin.card>
        </div>
    </div>
</div>
@endsection