@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Slots</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#slotModal">Add Slot</button>
            </div>
        </div>

        @php
            $slots = [
                ['id'=>1,'date'=>'2025-12-30','recurring'=>false,'day'=>'', 'start'=>'09:00','end'=>'11:00','max'=>20,'available'=>5,'status'=>'Active'],
                ['id'=>2,'date'=>'','recurring'=>true,'day'=>'Mon','start'=>'14:00','end'=>'16:00','max'=>15,'available'=>0,'status'=>'Inactive'],
                ['id'=>3,'date'=>'2025-12-31','recurring'=>false,'day'=>'','start'=>'18:00','end'=>'20:00','max'=>25,'available'=>10,'status'=>'Active'],
            ];
        @endphp

        <div class="card">
            <div class="card-body">
                <form class="row g-2 mb-3 align-items-center">
                    <div class="col-md-4">
                        <input type="date" class="form-control" name="date" placeholder="Filter by date">
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="status">
                            <option value="">All Status</option>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div class="col-md-5 text-end">
                        <div class="btn-group">
                            <button class="btn btn-outline-secondary">Export</button>
                            <button class="btn btn-outline-secondary">Bulk Activate</button>
                        </div>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Slot Date / Recurring</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Max Deliveries</th>
                                <th>Available</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slots as $s)
                            <tr>
                                <td><input type="checkbox" class="form-check-input" value="{{ $s['id'] }}"></td>
                                <td>
                                    @if($s['recurring'])
                                        <div><strong>Weekly ({{ $s['day'] }})</strong></div>
                                    @else
                                        <div><strong>{{ $s['date'] }}</strong></div>
                                    @endif
                                </td>
                                <td>{{ $s['start'] }}</td>
                                <td>{{ $s['end'] }}</td>
                                <td>{{ $s['max'] }}</td>
                                <td>{{ $s['available'] }}</td>
                                <td>
                                    @if($s['status'] === 'Active')
                                        <x-admin.badge type="success">Active</x-admin.badge>
                                    @else
                                        <x-admin.badge type="danger">Inactive</x-admin.badge>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#slotModal">Edit</button>
                                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                                        <button class="btn btn-sm btn-outline-primary">Toggle</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 d-flex justify-content-between align-items-center">
                    <div class="small text-muted">Showing 1-{{ count($slots) }} of {{ count($slots) }} slots</div>
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        {{-- Add / Edit Slot Modal (reusable) --}}
        @component('components.admin.modal-form', ['id' => 'slotModal', 'title' => 'Add / Edit Slot', 'size' => 'md'])
            <form>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" id="recurringCheck">
                    <label class="form-check-label" for="recurringCheck">Recurring weekly</label>
                </div>

                <div class="mb-3" id="dateGroup">
                    <label class="form-label">Slot date</label>
                    <input type="date" class="form-control">
                </div>

                <div class="mb-3 d-none" id="dayGroup">
                    <label class="form-label">Day</label>
                    <select class="form-select">
                        <option>Mon</option>
                        <option>Tue</option>
                        <option>Wed</option>
                        <option>Thu</option>
                        <option>Fri</option>
                        <option>Sat</option>
                        <option>Sun</option>
                    </select>
                </div>

                <div class="row g-2">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Start time</label>
                        <input type="time" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">End time</label>
                        <input type="time" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Maximum deliveries</label>
                    <input type="number" class="form-control" value="10">
                </div>

                <div class="form-check form-switch mb-3">
                    <input class="form-check-input" type="checkbox" id="slot-active" checked>
                    <label class="form-check-label" for="slot-active">Active</label>
                </div>

                <div class="small text-muted">Note: Save is UI-only; backend integration will be added later.</div>
            </form>
        @endcomponent

        <script>
            // toggle date / day input depending on recurring
            document.getElementById('recurringCheck')?.addEventListener('change', function(e) {
                document.getElementById('dateGroup').classList.toggle('d-none', e.target.checked);
                document.getElementById('dayGroup').classList.toggle('d-none', !e.target.checked);
            });
        </script>
    </div>
</main>
@endsection