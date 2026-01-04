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
                            <img src="/img/avatars/avatar.jpg"
                                alt="Profile" class="rounded-circle img-fluid" style="width:120px;height:120px;object-fit:cover;">
                            <!-- optional avatar -->

                            <h4 class="mt-3 mb-0">John Doe</h4>
                            <div class="small text-muted mb-2">Manager</div>

                            <div class="mb-2">
                                    <span class="badge bg-success">Active</span>
                                </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('staffs.edit', 1) }}" class="btn btn-primary">Edit</a>
                                <button class="btn btn-warning">Reset Password</button>
                                <button class="btn btn-outline-dark">Deactivate</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Contact</strong>
                                <div class="small text-muted mt-1">
                                    Email: <a href="mailto:john.doe@example.com">john.doe@example.com</a><br>
                                    Phone: <a href="tel:+15551234567">+1 (555) 123-4567</a>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Account</strong>
                                <div class="small text-muted mt-1">
                                    Created: 2024-06-01 10:30<br>
                                    Last Login: 2025-12-31 18:45
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Orders handled</strong>
                                <div class="small text-muted mt-1">123</div>
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
                            <h6 class="mb-2">Role: <span class="text-primary">Manager</span></h6>
                                <div class="mb-3">
                                    <span class="badge bg-light text-dark me-1">Manage Orders</span>
                                    <span class="badge bg-light text-dark me-1">Manage Products</span>
                                    <span class="badge bg-light text-dark me-1">View Reports</span>
                                </div>
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
                                        <tr>
                                            <td>2025-12-31 18:45</td>
                                            <td>Logged in</td>
                                            <td class="text-end">192.0.2.10</td>
                                        </tr>
                                        <tr>
                                            <td>2025-12-30 09:15</td>
                                            <td>Updated order #1234</td>
                                            <td class="text-end">192.0.2.11</td>
                                        </tr>
                                        <tr>
                                            <td>2025-12-25 14:02</td>
                                            <td>Created product SKU-001</td>
                                            <td class="text-end">192.0.2.12</td>
                                        </tr>
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