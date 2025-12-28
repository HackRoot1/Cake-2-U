@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Payment Gateway</h2>
            <small class="text-muted">Razorpay / payment settings (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'General', 'url' => route('admin.settings.general'), 'route' => 'admin.settings.general'],
        ['label' => 'Payment', 'url' => route('admin.settings.payment'), 'route' => 'admin.settings.payment'],
        ['label' => 'Email', 'url' => route('admin.settings.email'), 'route' => 'admin.settings.email'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="Razorpay">
                <x-admin.input label="API Key (public)" name="rz_key" value="rzp_test_abc123" />
                <x-admin.input label="API Secret" name="rz_secret" value="abcd****" type="password" />

                <div class="mb-3">
                    <label class="form-label">Mode</label>
                    <select class="form-select"><option>Test</option><option>Live</option></select>
                </div>

                <x-admin.input label="Webhook URL" name="webhook" value="https://example.com/webhook/razorpay" />
                <x-admin.input label="Webhook Secret" name="webhook_secret" value="****abcd" />

                <h6 class="mt-3">Payment methods</h6>
                <x-admin.toggle name="pay_card" label="Card" :checked="true" />
                <x-admin.toggle name="pay_upi" label="UPI" :checked="true" />
                <x-admin.toggle name="pay_netbank" label="Net Banking" />
                <x-admin.toggle name="pay_wallet" label="Wallet" />
                <x-admin.toggle name="pay_bnpl" label="Enable BNPL" />

                <div class="mt-2">
                    <button class="btn btn-outline-secondary">Test credentials</button>
                </div>
            </x-admin.card>
        </div>
        <div class="col-md-6">
            <x-admin.card title="Webhook verification logs">
                <table class="table table-sm mb-0"><thead><tr><th>Time</th><th>Event</th><th>Status</th></tr></thead>
                <tbody><tr><td>2025-12-27 12:22</td><td>payment.captured</td><td><span class="badge bg-success">Valid</span></td></tr></tbody></table>
                <p class="text-muted mt-2">Logs shown are dummy; real logs will be stored via webhook processing handlers.</p>
            </x-admin.card>
        </div>
    </div>
</div>
@endsection