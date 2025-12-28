@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Backup</strong> Verification</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-secondary">Back to list</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <button class="btn btn-outline-secondary">Test backup integrity</button>
                    <button class="btn btn-outline-secondary">Verify restore compatibility</button>
                    <button class="btn btn-primary">Sandbox test restore</button>
                </div>

                <div class="mt-3">
                    <div class="small text-muted">Status: <x-admin.badge type="success">Passed</x-admin.badge></div>
                </div>

                <div class="mt-3">
                    <h6>Log output</h6>
                    <pre class="p-3 bg-light">[2025-12-28 02:01] Integrity check passed\n[2025-12-28 02:02] Compatibility OK</pre>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection