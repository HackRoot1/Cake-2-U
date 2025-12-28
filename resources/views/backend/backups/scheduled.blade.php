@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Scheduled</strong> Backups</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.backups.index') }}" class="btn btn-outline-secondary">Back to list</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <form>
                    <h5>Auto Backup Frequency</h5>

                    <div class="mb-3">
                        <label class="form-label">Daily</label>
                        <div class="input-group w-auto">
                            <input type="time" class="form-control" value="02:00">
                            <div class="input-group-text">Daily at</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Weekly</label>
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <select class="form-select w-auto">
                                    <option>Mon</option>
                                    <option>Tue</option>
                                    <option>Wed</option>
                                    <option>Thu</option>
                                    <option>Fri</option>
                                    <option>Sat</option>
                                    <option>Sun</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <input type="time" class="form-control" value="03:00">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Monthly</label>
                        <div class="row g-2 align-items-center">
                            <div class="col-auto">
                                <input type="number" class="form-control w-auto" min="1" max="31" value="1">
                            </div>
                            <div class="col-auto">
                                <input type="time" class="form-control" value="04:00">
                            </div>
                        </div>
                    </div>

                    <hr />

                    <h5>Other Settings</h5>

                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Backup retention</label>
                        <div class="col-md-3">
                            <input type="number" class="form-control" value="10" min="1">
                            <div class="small text-muted">Keep last N backups</div>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-md-3 col-form-label">Storage location</label>
                        <div class="col-md-4">
                            <select class="form-select">
                                <option>Local Server</option>
                                <option>Google Drive</option>
                                <option>AWS S3</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <x-admin.toggle id="backup-encrypt" label="Backup encryption" :checked="true" />
                        <x-admin.toggle id="backup-compress" label="Backup compression" :checked="true" />
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn btn-primary">Save settings</button>
                    </div>

                    <div class="small text-muted mt-2">Note: This is a UI-only page. Cron/worker scheduling will be configured during backend integration.</div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection