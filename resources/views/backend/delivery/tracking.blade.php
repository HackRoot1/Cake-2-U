@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Tracking</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-outline-secondary">Refresh</button>
            </div>
        </div>

        @php
            $active = [
                ['order'=>'#1001','partner'=>'FastMove','status'=>'Out for delivery','duration'=>'00:23:12','sms'=>true,'email'=>true],
                ['order'=>'#1004','partner'=>'QuickShip','status'=>'Delivered','duration'=>'01:05:45','sms'=>true,'email'=>false],
                ['order'=>'#1007','partner'=>'RoadRunners','status'=>'Failed','duration'=>'00:45:12','sms'=>false,'email'=>true],
            ];
        @endphp

        <div class="row">
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-body text-center" style="height:420px;">
                        <div class="h-100 d-flex align-items-center justify-content-center text-muted">Map placeholder (UI-only)</div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header d-flex justify-content-between"><h5 class="mb-0">Active Deliveries</h5><small class="text-muted">Last 30 min</small></div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($active as $a)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $a['order'] }}</strong> • <span class="small text-muted">{{ $a['partner'] }}</span>
                                        <div class="small text-muted">Duration: {{ $a['duration'] }}</div>
                                    </div>

                                    <div class="text-end">
                                        <div class="mb-2">
                                            <select class="form-select form-select-sm">
                                                <option {{ $a['status'] === 'Out for delivery' ? 'selected' : '' }}>Out for delivery</option>
                                                <option {{ $a['status'] === 'Delivered' ? 'selected' : '' }}>Delivered</option>
                                                <option {{ $a['status'] === 'Failed' ? 'selected' : '' }}>Failed</option>
                                                <option {{ $a['status'] === 'Rescheduled' ? 'selected' : '' }}>Rescheduled</option>
                                            </select>
                                        </div>

                                        <div class="small">
                                            @if($a['sms']) <span title="SMS sent">📩</span> @endif
                                            @if($a['email']) <span title="Email sent">✉️</span> @endif
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header"><h5 class="mb-0">Status Actions</h5></div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-secondary">Mark Delivered (with photo proof)</button>
                            <button class="btn btn-outline-warning">Mark Failed</button>
                            <button class="btn btn-outline-primary">Reschedule</button>
                        </div>
                        <div class="small text-muted mt-3">Photo proof and failure reasons are UI-only placeholders.</div>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-header"><h5 class="mb-0">Legend</h5></div>
                    <div class="card-body small text-muted">
                        • Out for delivery
                        <br>• Delivered
                        <br>• Failed
                        <br>• Rescheduled
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection