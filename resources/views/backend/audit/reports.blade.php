@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Audit Reports</h2>
            <small class="text-muted">Summary dashboards (UI-only, dummy data)</small>
        </div>
        <div>
            <div class="btn-group">
                <button class="btn btn-outline-secondary">Export as PDF</button>
                <button class="btn btn-outline-secondary">Export as Excel</button>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">User activity summary</h5>
                    <p class="text-muted">Top users by actions (placeholder chart)</p>
                    <div style="height:120px;background:#f5f7fb;border-radius:6px;display:flex;align-items:center;justify-content:center;">Chart placeholder</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Data change history</h5>
                    <p class="text-muted">Entity-wise changes</p>
                    <div style="height:120px;background:#f5f7fb;border-radius:6px;display:flex;align-items:center;justify-content:center;">Chart placeholder</div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Security events</h5>
                    <p class="text-muted">Login failures & unauthorized attempts</p>
                    <div style="height:120px;background:#f5f7fb;border-radius:6px;display:flex;align-items:center;justify-content:center;">Chart placeholder</div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">User-wise activity</h5>
            <p class="text-muted">Table placeholder</p>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Actions</th>
                        <th>Last Activity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Jane Doe</td><td>120</td><td>2025-12-01</td></tr>
                    <tr><td>Admin</td><td>540</td><td>2025-12-27</td></tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Export features and chart wiring to be implemented in controller / frontend scripts later. --}}
</div>
@endsection