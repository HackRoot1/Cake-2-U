@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Slots Calendar</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <a href="{{ route('admin.delivery.slots.index') }}" class="btn btn-outline-secondary">Back to slots</a>
            </div>
        </div>

        {{-- UI mock calendar grid --}}
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <div>
                        <button class="btn btn-outline-secondary">Prev</button>
                        <button class="btn btn-outline-secondary">Next</button>
                    </div>

                    <div>
                        <select class="form-select d-inline w-auto">
                            <option>Month</option>
                            <option>Week</option>
                        </select>
                    </div>
                </div>

                <div class="calendar-grid">
                    @php
                        $days = range(1,30);
                        // Dummy slots per day
                        $slotsByDay = [1 => [['time'=>'09:00-11:00','status'=>'available'],  ['time'=>'18:00-20:00','status'=>'partial']], 2 => [['time'=>'14:00-16:00','status'=>'full']]];
                    @endphp

                    @foreach($days as $d)
                        <div class="calendar-cell" data-day="{{ $d }}">
                            <div class="cell-header">{{ $d }} Dec</div>

                            <div class="cell-slots">
                                @if(isset($slotsByDay[$d]))
                                    @foreach($slotsByDay[$d] as $slot)
                                        <div class="slot-pill slot-{{ $slot['status'] }}" data-bs-toggle="modal" data-bs-target="#slotModal">{{ $slot['time'] }}</div>
                                    @endforeach
                                @endif
                            </div>

                            <div class="cell-footer small text-muted">Click slot to edit • Drag to reschedule</div>
                        </div>
                    @endforeach
                </div>

                <style>
                    .calendar-grid { display:grid; grid-template-columns:repeat(7,1fr); gap:10px; }
                    .calendar-cell { border:1px solid #e9ecef; padding:8px; min-height:120px; border-radius:6px; background:#fff }
                    .cell-header { font-weight:600; margin-bottom:6px }
                    .slot-pill { display:inline-block; padding:6px 10px; border-radius:20px; margin-bottom:6px; cursor:pointer; font-size:13px }
                    .slot-available { background:#d1fae5; color:#065f46 } /* green */
                    .slot-partial { background:#fff7ed; color:#7c2d12 } /* orange */
                    .slot-full { background:#fee2e2; color:#7f1d1d } /* red */
                </style>

                {{-- reuse Add/Edit modal from slots.index (slotModal) --}}
                @component('components.admin.modal-form', ['id' => 'slotModal', 'title' => 'Edit Slot'])
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Time</label>
                            <input class="form-control" value="09:00 - 11:00">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option value="available">Available</option>
                                <option value="partial">Partially filled</option>
                                <option value="full">Full / Inactive</option>
                            </select>
                        </div>
                        <div class="small text-muted">Drag & drop shown visually only.</div>
                    </form>
                @endcomponent
            </div>
        </div>
    </div>
</main>
@endsection