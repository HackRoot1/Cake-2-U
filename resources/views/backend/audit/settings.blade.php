@extends('backend.layouts.app')

@section('content')
<div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h2 class="mb-0">Retention Policy</h2>
            <small class="text-muted">Configure audit log retention (UI-only)</small>
        </div>
        <div>
            <a href="{{ route('admin.audit.index') }}" class="btn btn-outline-secondary">Back to logs</a>
        </div>
    </div>

    <div class="card mb-3">
        <div class="card-body">
            <form>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Auto-delete logs older than (days)</label>
                        <input type="number" class="form-control" value="365">
                        <div class="form-text">Set to 0 to disable auto-delete</div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Archive logs to external storage</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="archiveGdrive">
                            <label class="form-check-label" for="archiveGdrive">Google Drive</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="archiveS3">
                            <label class="form-check-label" for="archiveS3">AWS S3</label>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="alert alert-warning">
                            <strong>Warning:</strong> Deleting logs is permanent and cannot be undone.
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between align-items-center mt-2">
                        <button type="button" class="btn btn-danger">Delete logs older than X days</button>
                        <button type="button" class="btn btn-primary">Save settings</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- Comments: Manual delete and archival process would be implemented in jobs/commands and UI will call endpoints secured by middleware. --}}
</div>
@endsection