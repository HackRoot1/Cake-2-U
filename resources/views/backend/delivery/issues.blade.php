@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Issues</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-primary">Export</button>
            </div>
        </div>

        @php
            $issues = [
                ['order'=>'#1007','partner'=>'RoadRunners','reason'=>'Customer unavailable','status'=>'Open'],
                ['order'=>'#1010','partner'=>'FastMove','reason'=>'Incorrect address','status'=>'In Progress'],
                ['order'=>'#1012','partner'=>'QuickShip','reason'=>'Vehicle issue','status'=>'Resolved'],
            ];
        @endphp

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Partner</th>
                                <th>Failure Reason</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($issues as $i)
                                <tr>
                                    <td>{{ $i['order'] }}</td>
                                    <td>{{ $i['partner'] }}</td>
                                    <td>{{ $i['reason'] }}</td>
                                    <td><x-admin.badge type="warning">{{ $i['status'] }}</x-admin.badge></td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#reasonModal">Retry Scheduling</button>
                                            <button class="btn btn-sm btn-outline-secondary">Contact Customer</button>
                                            <button class="btn btn-sm btn-outline-secondary">View Details</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- Failure reason modal --}}
        <div class="modal fade" id="reasonModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Failure Reason</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Reason</label>
                            <select class="form-select">
                                <option>Customer unavailable</option>
                                <option>Incorrect address</option>
                                <option>Weather issue</option>
                                <option>Vehicle issue</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notes</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection