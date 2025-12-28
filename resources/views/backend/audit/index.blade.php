@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Audit Logs</h2>
            <small class="text-muted">List of recent admin actions (UI-only, dummy data)</small>
        </div>
        <div class="d-flex gap-2 align-items-center">
            <span class="badge bg-success" title="All admin actions are logged instantly">Real-time logging enabled</span>
            <a href="{{ route('admin.audit.settings') }}" class="btn btn-outline-secondary">Settings</a>
        </div>
    </div>

    {{-- Top controls: search & filters (UI only) --}}
    <div class="card mb-3">
        <div class="card-body">
            <form class="row g-2">
                <div class="col-md-4">
                    <input type="search" class="form-control" placeholder="Search by user, action, entity or date">
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control" placeholder="From">
                </div>
                <div class="col-md-2">
                    <input type="date" class="form-control" placeholder="To">
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>Action: All</option>
                        <option>Create</option>
                        <option>Edit</option>
                        <option>Delete</option>
                        <option>View</option>
                        <option>Login</option>
                        <option>Logout</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select">
                        <option selected>Entity: All</option>
                        <option>Product</option>
                        <option>Order</option>
                        <option>Customer</option>
                        <option>Settings</option>
                    </select>
                </div>
                <div class="col-12 d-flex justify-content-end mt-2">
                    <select class="form-select w-auto me-2">
                        <option>Newest</option>
                        <option>Oldest</option>
                    </select>

                    <select class="form-select w-auto me-2">
                        <option>10 per page</option>
                        <option>25 per page</option>
                        <option>50 per page</option>
                    </select>

                    <button class="btn btn-primary">Filter</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Dummy data array inside the view (UI-only). In real app this would come from a controller/model --}}
    @php
        $logs = [
            (object)[ 'id'=>1,'user_name'=>'Admin User','user_email'=>'admin@example.com','action'=>'Create','entity_type'=>'Product','entity_name'=>'Coffee Mug','timestamp'=>now()->subMinutes(20)->toDateTimeString(),'ip'=>'192.168.0.2','device'=>'Firefox on macOS','summary'=>'Created product Coffee Mug' ],
            (object)[ 'id'=>2,'user_name'=>'Jane Doe','user_email'=>'jane@example.com','action'=>'Edit','entity_type'=>'Product','entity_name'=>'Wireless Mouse','timestamp'=>now()->subHours(3)->toDateTimeString(),'ip'=>'192.168.0.10','device'=>'Chrome on Windows 10','summary'=>'Updated price from 10 to 12.99' ],
            (object)[ 'id'=>3,'user_name'=>'System','user_email'=>'system@example.com','action'=>'Login','entity_type'=>'Auth','entity_name'=>'-','timestamp'=>now()->subHours(5)->toDateTimeString(),'ip'=>'10.0.0.1','device'=>'API' ,'summary'=>'Staff login successful'],
        ];

        function badgeType($action) {
            return match($action) {
                'Create' => 'success',
                'Edit' => 'warning',
                'Delete' => 'danger',
                'Login' => 'info',
                default => 'secondary',
            };
        }
    @endphp

    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Action</th>
                        <th>Entity</th>
                        <th>Entity Name / ID</th>
                        <th>Timestamp</th>
                        <th>IP</th>
                        <th>Device</th>
                        <th>Summary</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($logs as $log)
                        <tr>
                            <td>
                                <div><strong>{{ $log->user_name }}</strong></div>
                                <div class="text-muted small">{{ $log->user_email }}</div>
                            </td>
                            <td><x-admin.badge :type="badgeType($log->action)">{{ $log->action }}</x-admin.badge></td>
                            <td>{{ $log->entity_type }}</td>
                            <td>{{ $log->entity_name }} <br><small class="text-muted">ID: {{ $log->id }}</small></td>
                            <td>{{ $log->timestamp }}</td>
                            <td>{{ $log->ip }}</td>
                            <td>{{ $log->device }}</td>
                            <td>{{ $log->summary }}</td>
                            <td>
                                <a href="{{ route('admin.audit.show', ['id' => $log->id]) }}" class="btn btn-sm btn-outline-primary">View Details</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{-- Pagination placeholder --}}
            <div class="d-flex justify-content-between align-items-center mt-3">
                <div>Showing 1-{{ count($logs) }} of 100</div>
                <nav>
                    <ul class="pagination mb-0">
                        <li class="page-item disabled"><a class="page-link">Previous</a></li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
