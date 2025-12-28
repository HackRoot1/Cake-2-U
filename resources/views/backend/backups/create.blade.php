@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Create</strong> Backup</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-secondary">Back to list</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <p class="small text-muted">Click the button below to create a manual backup. This is UI-only and shows a sample progress flow.</p>
                </div>

                <div class="mb-3">
                    <button id="create-backup" class="btn btn-primary">Create Backup Now</button>
                </div>

                <div class="mb-3" id="backup-progress" style="display:none;">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%">65%</div>
                    </div>
                    <div class="small text-success mt-2">Backup completed successfully (UI-only).</div>
                    <div class="mt-2">
                        <button class="btn btn-outline-secondary">Download backup</button>
                    </div>
                </div>

                <script>
                    document.getElementById('create-backup')?.addEventListener('click', function() {
                        document.getElementById('backup-progress').style.display = '';
                        alert('Backup started (UI-only).');
                    });
                </script>
            </div>
        </div>
    </div>
</main>
@endsection