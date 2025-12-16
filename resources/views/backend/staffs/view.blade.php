@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Staff</strong> Detail</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('staffs.index') }}" class="btn btn-secondary">Back to Staffs</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/avatars/avatar.jpg') }}"
                                alt="Profile" class="rounded-circle img-fluid" style="width:120px;height:120px;object-fit:cover;">
                            {{-- <img src="{{ $staff->avatar_url ?? ('https://ui-avatars.com/api/?name=' . urlencode($staff->first_name . ' ' . $staff->last_name) . '&background=0D6EFD&color=fff') }}"
                                alt="Profile" class="rounded-circle img-fluid" style="width:120px;height:120px;object-fit:cover;"> --}}

                            <h4 class="mt-3 mb-0">{{ $staff->first_name ?? 'First' }} {{ $staff->last_name ?? 'Last' }}</h4>
                            <div class="small text-muted mb-2">@if(isset($staff->role)) {{ $staff->role->name }} @else — @endif</div>

                            <div class="mb-2">
                                @if(isset($staff->status) && $staff->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('staffs.edit', $staff->id ?? 0) }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-warning">Reset Password</button>

                                @if(isset($staff->status) && $staff->status == 'active')
                                    <button class="btn btn-outline-dark">Deactivate</button>
                                @else
                                    <button class="btn btn-success">Reactivate</button>
                                @endif

                                <form method="POST" action="{{ route('staffs.destroy', $staff->id ?? 0) }}" onsubmit="return confirm('Are you sure you want to delete this staff?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Contact</strong>
                                <div class="small text-muted mt-1">
                                    Email: <a href="mailto:">{{ $staff->email ?? '—' }}</a><br>
                                    Phone: <a href="tel:">{{ $staff->phone ?? '—' }}</a>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Account</strong>
                                <div class="small text-muted mt-1">
                                    Created: {{ isset($staff->created_at) ? $staff->created_at->format('Y-m-d H:i') : '—' }}<br>
                                    Last Login: {{ isset($staff->last_login_at) ? $staff->last_login_at->format('Y-m-d H:i') : '—' }}
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Orders handled</strong>
                                <div class="small text-muted mt-1">{{ $staff->orders_count ?? 0 }}</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Role & Permissions</h5>
                        </div>

                        <div class="card-body">
                            @if(isset($staff->role))
                                <h6 class="mb-2">Role: <span class="text-primary">{{ $staff->role->name }}</span></h6>
                                <div class="mb-3">
                                    @if(isset($staff->role->permissions) && $staff->role->permissions->count())
                                        @foreach($staff->role->permissions as $permission)
                                            <span class="badge bg-light text-dark me-1">{{ $permission->name }}</span>
                                        @endforeach
                                    @else
                                        <div class="small text-muted">No permissions assigned.</div>
                                    @endif
                                </div>
                            @else
                                <div class="small text-muted">No role assigned.</div>
                            @endif
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Recent Activity</h5>
                            <h6 class="card-subtitle text-muted">Recent actions performed by this staff</h6>
                        </div>

                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover">
                                    <thead>
                                        <tr>
                                            <th width="180">Date</th>
                                            <th>Action</th>
                                            <th class="text-end">IP</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($activityLogs ?? [] as $log)
                                            <tr>
                                                <td>{{ isset($log->created_at) ? $log->created_at->format('Y-m-d H:i') : '—' }}</td>
                                                <td>{{ $log->description ?? $log->action ?? '—' }}</td>
                                                <td class="text-end">{{ $log->ip ?? '—' }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="small text-muted">No recent activity.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection 