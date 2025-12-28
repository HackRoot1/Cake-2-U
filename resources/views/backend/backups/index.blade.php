@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Backups</strong> List</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.create') }}" class="btn btn-primary">Create Backup</a>
            </div>
        </div>

        @php
            $backups = [
                ['id'=>1,'datetime'=>'2025-12-28 02:00','size'=>'120MB','location'=>'Local Server','status'=>'Completed'],
                ['id'=>2,'datetime'=>'2025-12-27 03:00','size'=>'118MB','location'=>'AWS S3','status'=>'Completed'],
                ['id'=>3,'datetime'=>'2025-12-26 04:00','size'=>'N/A','location'=>'Google Drive','status'=>'Failed'],
                ['id'=>4,'datetime'=>'2025-12-28 05:00','size'=>'60MB','location'=>'Local Server','status'=>'In Progress'],
            ];
        @endphp

        <div class="card">
            <div class="card-body">
                <form class="row g-2 mb-3 align-items-center">
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>All statuses</option>
                            <option>Completed</option>
                            <option>In Progress</option>
                            <option>Failed</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select">
                            <option>All locations</option>
                            <option>Local Server</option>
                            <option>AWS S3</option>
                            <option>Google Drive</option>
                        </select>
                    </div>
                    <div class="col-md-6 text-end">
                        <x-admin.toggle id="auto-delete" label="Auto-delete old backups" :checked="false" />
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Backup Date & Time</th>
                                <th>File Size</th>
                                <th>Storage Location</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($backups as $b)
                                <tr>
                                    <td>{{ $b['datetime'] }}</td>
                                    <td>{{ $b['size'] }}</td>
                                    <td>{{ $b['location'] }}</td>
                                    <td>
                                        @if($b['status'] === 'Completed')
                                            <x-admin.badge type="success">Completed</x-admin.badge>
                                        @elseif($b['status'] === 'In Progress')
                                            <x-admin.badge type="info">In Progress</x-admin.badge>
                                        @else
                                            <x-admin.badge type="danger">Failed</x-admin.badge>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-secondary">Download</button>
                                            <a href="{{ route('admin.backups.restore') }}" class="btn btn-sm btn-outline-primary">Restore</a>
                                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <div class="small text-muted">Showing 1-{{ count($backups) }} of {{ count($backups) }} backups</div>
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</main>
@endsection