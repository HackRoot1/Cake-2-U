@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Restore</strong> Backup</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-secondary">Back to list</a>
            </div>
        </div>

        @php
            $options = [
                ['id'=>1,'name'=>'Backup 2025-12-28 02:00'],
                ['id'=>2,'name'=>'Backup 2025-12-27 03:00'],
            ];
        @endphp

        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Select Backup</label>
                    <select class="form-select" id="restore-select">
                        @foreach($options as $o)
                            <option value="{{ $o['id'] }}">{{ $o['name'] }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#confirmRestore">Restore</button>
                </div>

                {{-- Confirm modal --}}
                <div class="modal fade" id="confirmRestore" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Confirm Restore</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Warning:</strong> This action will overwrite current data.</p>
                                <p>Estimated restore time: ~5 minutes (UI-only).</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="notify-on-complete">
                                    <label class="form-check-label small" for="notify-on-complete">Email me when complete</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary" id="do-restore">Confirm Restore</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3" id="restore-process" style="display:none;">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 40%">40%</div>
                    </div>
                    <div class="small text-muted mt-2">Email notification: <strong>on</strong></div>
                </div>

                <script>
                    document.getElementById('do-restore')?.addEventListener('click', function() {
                        // UI-only: show progress
                        document.getElementById('confirmRestore').querySelector('[data-bs-dismiss]')?.click();
                        document.getElementById('restore-process').style.display = '';
                        alert('Restore started (UI-only).');
                    });
                </script>
            </div>
        </div>
    </div>
</main>
@endsection