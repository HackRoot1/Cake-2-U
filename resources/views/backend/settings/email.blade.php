@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Email Settings</h2>
            <small class="text-muted">SMTP and email templates (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'General', 'url' => route('admin.settings.general'), 'route' => 'admin.settings.general'],
        ['label' => 'Email', 'url' => route('admin.settings.email'), 'route' => 'admin.settings.email'],
        ['label' => 'Payment', 'url' => route('admin.settings.payment'), 'route' => 'admin.settings.payment'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="SMTP Configuration">
                <x-admin.input label="SMTP Server" name="smtp_server" value="smtp.example.com" />
                <x-admin.input label="Port" name="smtp_port" value="587" />
                <x-admin.input label="Username" name="smtp_user" value="user@example.com" />
                <x-admin.input label="Password" name="smtp_pass" value="" type="password" help="Stored securely; shown as masked" />
                <x-admin.input label="From email" name="from_email" value="no-reply@example.com" />
                <x-admin.input label="From name" name="from_name" value="Cake 2 U" />

                <div class="mt-2">
                    <button class="btn btn-outline-secondary">Test email</button>
                </div>
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Email templates">
                <div class="list-group">
                    @foreach(['Order confirmation','Shipping notification','Delivery notification','Return confirmation','Newsletter','Password reset','Welcome email','Promotional emails'] as $tpl)
                        <div class="d-flex justify-content-between align-items-center list-group-item">
                            <div>{{ $tpl }}</div>
                            <div class="btn-group">
                                <button class="btn btn-sm btn-outline-secondary">Preview</button>
                                <button class="btn btn-sm btn-primary">Edit</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <p class="text-muted mt-2">Templates are editable in the admin UI and stored as HTML/text files in a future implementation.</p>
            </x-admin.card>
        </div>
    </div>
</div>
@endsection