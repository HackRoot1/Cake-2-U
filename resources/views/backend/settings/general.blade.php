@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">General Settings</h2>
            <small class="text-muted">Site information and feature toggles (UI-only)</small>
        </div>
        <div>
            <a href="{{ route('admin.settings.general') }}" class="btn btn-outline-secondary">Reset</a>
            <button class="btn btn-primary">Save Settings</button>
        </div>
    </div>

    <x-admin.tabs :items="[
        ['label' => 'General', 'url' => route('admin.settings.general'), 'route' => 'admin.settings.general'],
        ['label' => 'Email', 'url' => route('admin.settings.email'), 'route' => 'admin.settings.email'],
        ['label' => 'Payment', 'url' => route('admin.settings.payment'), 'route' => 'admin.settings.payment'],
        ['label' => 'Delivery', 'url' => route('admin.settings.delivery'), 'route' => 'admin.settings.delivery'],
        ['label' => 'Notifications', 'url' => route('admin.settings.notifications'), 'route' => 'admin.settings.notifications'],
        ['label' => 'SEO', 'url' => route('admin.settings.seo'), 'route' => 'admin.settings.seo'],
        ['label' => 'API', 'url' => route('admin.settings.api'), 'route' => 'admin.settings.api'],
        ['label' => 'Backup & Security', 'url' => route('admin.settings.security'), 'route' => 'admin.settings.security'],
        ['label' => 'Tax (GST)', 'url' => route('admin.settings.tax'), 'route' => 'admin.settings.tax'],
    ]" />

    <div class="row g-3">
        <div class="col-md-8">
            <x-admin.card title="Site Information">
                <x-admin.input label="Site name" name="site_name" value="Cake 2 U" />

                <div class="mb-3">
                    <label class="form-label">Site logo</label>
                    <div class="d-flex gap-3 align-items-center">
                        <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="logo" style="height:56px;border-radius:6px;" id="logoPreview">
                        <input type="file" class="form-control form-control-sm" onchange="document.getElementById('logoPreview').src = window.URL.createObjectURL(this.files[0])">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Favicon</label>
                    <input type="file" class="form-control form-control-sm">
                </div>

                <x-admin.input label="Site description (SEO)" name="site_description" value="Best cakes in town" />
                <x-admin.input label="Contact email" name="contact_email" value="support@example.com" type="email" />
                <x-admin.input label="Contact phone" name="contact_phone" value="+1 555 555" />
                <x-admin.input label="Business address" name="address" value="123 Baker St" />
                <x-admin.input label="Business hours" name="hours" value="9:00 - 18:00" />

                <h6>Social media</h6>
                <x-admin.input label="Facebook" name="facebook" value="https://facebook.com/example" />
                <x-admin.input label="Instagram" name="instagram" value="https://instagram.com/example" />
                <x-admin.input label="Twitter" name="twitter" value="https://twitter.com/example" />
                <x-admin.input label="Pinterest" name="pinterest" value="https://pinterest.com/example" />
            </x-admin.card>

            <x-admin.card title="Site Features" class="mt-3">
                <x-admin.toggle name="feature_blog" label="Blog" :checked="true" />
                <x-admin.toggle name="feature_reviews" label="Reviews" :checked="true" />
                <x-admin.toggle name="feature_wishlist" label="Wishlist" />
                <x-admin.toggle name="feature_gift" label="Gift wrapping" />
                <x-admin.toggle name="feature_subscription" label="Subscription" />
                <x-admin.toggle name="feature_loyalty" label="Loyalty points" />
                <x-admin.toggle name="feature_referral" label="Referral program" />
            </x-admin.card>
        </div>

        <div class="col-md-4">
            <x-admin.card title="General settings notes">
                <p class="text-muted">This page is UI-only. Validation, file handling and persistence will be implemented in controllers/services later.</p>
            </x-admin.card>

            <x-admin.card class="mt-3">
                <h6>Save</h6>
                <p class="text-muted">Remember to save changes after editing sections.</p>
                <div class="d-grid gap-2"><button class="btn btn-primary">Save changes</button></div>
            </x-admin.card>
        </div>
    </div>
</div>
@endsection