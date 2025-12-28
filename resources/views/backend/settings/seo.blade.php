@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">SEO Settings</h2>
            <small class="text-muted">Search engine and structured data settings (UI-only)</small>
        </div>
        <div>
            <button class="btn btn-outline-secondary">Reset</button>
            <button class="btn btn-primary">Save</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'SEO', 'url' => route('admin.settings.seo'), 'route' => 'admin.settings.seo'],
    ]" />

    <div class="row g-3">
        <div class="col-md-6">
            <x-admin.card title="General SEO">
                <x-admin.input label="Meta description" name="meta_desc" value="Buy best cakes online" />
                <x-admin.input label="Meta keywords" name="meta_keys" value="cakes, bakery" />
                <div class="form-check form-switch mb-2"><input class="form-check-input" type="checkbox" id="sitemap" checked><label class="form-check-label" for="sitemap">Enable XML sitemap</label></div>
                <x-admin.input label="Google Analytics ID" name="ga_id" value="UA-XXXXX" />
                <x-admin.input label="Search Console verification" name="gsc" value="" />
            </x-admin.card>
        </div>

        <div class="col-md-6">
            <x-admin.card title="Structured Data (JSON-LD)">
                <label class="form-label">Organization schema</label>
                <textarea class="form-control" rows="4">{"@context":"https://schema.org"}</textarea>
                <label class="form-label mt-2">Product schema</label>
                <textarea class="form-control" rows="4">{"@context":"https://schema.org"}</textarea>
                <label class="form-label mt-2">LocalBusiness schema</label>
                <textarea class="form-control" rows="4">{"@context":"https://schema.org"}</textarea>
            </x-admin.card>

            <x-admin.card class="mt-3" title="robots.txt">
                <textarea class="form-control" rows="6">User-agent: *
Disallow:</textarea>
            </x-admin.card>
        </div>
    </div>
</div>
@endsection