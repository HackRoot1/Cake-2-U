@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Backup</strong> Security & Audit</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-secondary">Back to list</a>
            </div>
        </div>

        @php
            $accessLogs = [
                ['user'=>'admin','action'=>'Downloaded backup 2025-12-28','datetime'=>'2025-12-28 03:01'],
                ['user'=>'operator','action'=>'Triggered manual backup','datetime'=>'2025-12-28 02:50'],
            ];

            $deletions = [
                ['name'=>'backup-2025-12-20.zip','deleted_by'=>'admin','datetime'=>'2025-12-25 10:00'],
            ];
        @endphp

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5>Encrypted storage</h5>
                        <div class="small text-muted">Status: <x-admin.badge type="info">Encrypted</x-admin.badge></div>
                        <div class="small text-muted mt-2">Encryption keys managed securely (UI-only)</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="mb-0">Secure access logs</h5></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead><tr><th>User</th><th>Action</th><th>Date & Time</th></tr></thead>
                                <tbody>
                                    @foreach($accessLogs as $l)
                                        <tr><td>{{ $l['user'] }}</td><td>{{ $l['action'] }}</td><td>{{ $l['datetime'] }}</td></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header"><h5 class="mb-0">Backup deletion audit trail</h5></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead><tr><th>Backup</th><th>Deleted by</th><th>Date</th></tr></thead>
                                <tbody>
                                    @foreach($deletions as $d)
                                        <tr><td>{{ $d['name'] }}</td><td>{{ $d['deleted_by'] }}</td><td>{{ $d['datetime'] }}</td></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="small text-muted mt-2">Logs are read-only in the UI; backend auditing will be implemented later.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection