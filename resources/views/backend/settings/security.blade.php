@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Backup & Security</h2>
            <small class="text-muted">Backups, SSL and security policies (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'Security', 'url' => route('admin.settings.security'), 'route' => 'admin.settings.security'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="Backups">
                <x-admin.input label="Auto-backup frequency" name="backup_freq" value="Daily" />
                <x-admin.input label="Retention count" name="backup_retention" value="30" />
                <x-admin.input label="Last backup" name="last_backup" value="2025-12-27 02:00" />
                <div class="mt-2">
                    <button class="btn btn-outline-secondary">Manual backup</button>
                </div>
            </x-admin.card>

            <x-admin.card class="mt-3" title="Storage locations">
                <x-admin.toggle name="store_gdrive" label="Google Drive" />
                <x-admin.toggle name="store_local" label="Local server" :checked="true" />
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Security">
                <p>SSL certificate: <strong>Valid</strong></p>
                <p>HTTPS status: <strong>Enabled</strong></p>
                <p>Security scan: <strong>Passed</strong></p>

                <h6 class="mt-3">Password policy</h6>
                <x-admin.input label="Min length" name="pwd_min" value="8" />
                <x-admin.input label="Complexity" name="pwd_complex" value="Uppercase, numbers" />

                <h6 class="mt-3">Account lockout</h6>
                <x-admin.input label="Failed attempts" name="lock_attempts" value="5" />
                <x-admin.input label="Lockout duration (minutes)" name="lock_duration" value="30" />

                <x-admin.toggle name="enforce_2fa" label="Enforce 2FA for admins" :checked="true" />
                <x-admin.input label="IP whitelist" name="ip_whitelist" value="" />
            </x-admin.card>
        </div>
    </div>
</div>
@endsection