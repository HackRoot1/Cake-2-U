@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Notification Settings</h2>
            <small class="text-muted">SMS, Email and Push notifications (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'Notifications', 'url' => route('admin.settings.notifications'), 'route' => 'admin.settings.notifications'],
        ['label' => 'Email', 'url' => route('admin.settings.email'), 'route' => 'admin.settings.email'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="SMS (Twilio)">
                <x-admin.input label="Account SID" name="twilio_sid" value="ACxxxx" />
                <x-admin.input label="Auth Token" name="twilio_token" value="****" />
                <x-admin.input label="Phone number" name="twilio_phone" value="+1 555 555" />
                <x-admin.toggle name="enable_sms" label="Enable SMS notifications" :checked="true" />
                <div class="mt-2"><button class="btn btn-outline-secondary">Test SMS</button></div>
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Email Notifications">
                <x-admin.toggle name="enable_email_notifications" label="Enable email notifications" :checked="true" />
                <label class="form-label mt-2">Template selector</label>
                <select class="form-select"><option>Order placed</option></select>

                <h6 class="mt-3">Push Notifications (future)</h6>
                <x-admin.toggle name="enable_push" label="Enable push notifications (disabled)" :checked="false" />
                <x-admin.input label="Firebase Server Key" name="fb_key" value="" />
                <x-admin.input label="Firebase Sender ID" name="fb_sender" value="" />
            </x-admin.card>
        </div>
    </div>
</div>
@endsection