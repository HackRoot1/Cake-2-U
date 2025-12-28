@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Audit Log Detail</h2>
            <small class="text-muted">Entry #{{ $log->id }} — {{ $log->action }}</small>
        </div>
        <div>
            <a href="{{ route('admin.audit.index') }}" class="btn btn-outline-secondary">Back to list</a>
        </div>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Action</h5>
                    <p><strong>{{ $log->action }}</strong></p>

                    <h5 class="card-title">User</h5>
                    <p><strong>{{ $log->user_name }}</strong><br><small class="text-muted">{{ $log->user_email }}</small></p>

                    <h5 class="card-title">When</h5>
                    <p>{{ $log->timestamp }}</p>

                    <h5 class="card-title">Network</h5>
                    <p>IP: {{ $log->ip }}<br>Device: {{ $log->device }}</p>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Related entities</h5>
                    <p class="text-muted">Placeholder links to related entities.</p>
                    <a href="#" class="d-block">{{ $log->entity_type }}: {{ $log->entity_name }}</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Change Details</h5>

                    @if($log->action === 'Edit')
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th>Field</th>
                                        <th>Before</th>
                                        <th>After</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($log->before as $field => $value)
                                        <tr>
                                            <td>{{ $field }}</td>
                                            <td class="text-muted">{{ $value }}</td>
                                            <td><strong>{{ $log->after[$field] ?? '—' }}</strong></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-muted">No before/after data for this action.</p>
                    @endif

                    <hr>
                    <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="collapse" data-bs-target="#rawEvent">View raw event</button>
                    <div id="rawEvent" class="collapse mt-2">
                        <pre class="small bg-light p-2">{{ json_encode($log, JSON_PRETTY_PRINT) }}</pre>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Audit Notes</h5>
                    <p class="text-muted">Add internal notes (UI-only placeholder).</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Comments: Observers, middleware and persistent storage will be implemented later in the controller/model layers. --}}
</div>
@endsection
