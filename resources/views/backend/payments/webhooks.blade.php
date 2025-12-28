@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid">
            <h1 class="h3 mb-3">Webhook Management</h1>

            <div class="card mb-3">
                <div class="card-body">
                    <h6>Razorpay Configuration</h6>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Webhook URL</label>
                            <input class="form-control" value="https://example.com/webhooks/razorpay" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Secret</label>
                            <input class="form-control" value="••••••••" />
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Save (static)</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6>Webhook Logs</h6>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Time</th>
                                    <th>Event</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>2025-12-25 12:12</td>
                                    <td>payment.captured</td>
                                    <td><span class="badge bg-success">200 OK</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                </tr>
                                <tr>
                                    <td>2025-12-25 12:10</td>
                                    <td>payment.failed</td>
                                    <td><span class="badge bg-danger">Failed</span></td>
                                    <td><a href="#" class="btn btn-sm btn-outline-secondary">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
