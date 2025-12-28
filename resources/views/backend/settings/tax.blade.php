@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Tax Settings (GST)</h2>
            <small class="text-muted">India GST configuration (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'Tax (GST)', 'url' => route('admin.settings.tax'), 'route' => 'admin.settings.tax'],
    ]" />

    <x-admin.card title="GST Configuration">
        <x-admin.input label="GST registration number" name="gst_no" value="22AAAAA0000A1Z5" />
        <x-admin.input label="GST tax rate (%)" name="gst_rate" value="18" />
        <div class="form-check mb-2"><input class="form-check-input" type="checkbox" id="apply_gst" checked><label class="form-check-label" for="apply_gst">Apply GST to all products</label></div>
        <x-admin.input label="Exclude categories" name="exclude_categories" value="" help="Comma-separated category IDs" />
        <x-admin.input label="CGST (%)" name="cgst" value="9" />
        <x-admin.input label="SGST (%)" name="sgst" value="9" />
    </x-admin.card>

    <p class="text-muted mt-2">GST calculations, rounding and compliance logic should be implemented server-side and with validations and audit logging.</p>
</div>
@endsection