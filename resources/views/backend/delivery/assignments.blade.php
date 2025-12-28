@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Assign</strong> Deliveries</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-outline-secondary">Auto-assign</button>
                <button class="btn btn-primary">Bulk assign</button>
            </div>
        </div>

        @php
            $deliveries = [
                ['order'=>'#1001','customer'=>'Alice Nguyen','address'=>'123 Main St','slot'=>'2025-12-30 • 09:00-11:00','zone'=>'Zone A'],
                ['order'=>'#1002','customer'=>'John Doe','address'=>'45 Oak Ave','slot'=>'2025-12-30 • 18:00-20:00','zone'=>'Zone B'],
                ['order'=>'#1003','customer'=>'Sara Park','address'=>'9 Pine Rd','slot'=>'Mon • 14:00-16:00','zone'=>'Zone A'],
            ];

            $partners = [
                ['name'=>'FastMove','zone'=>'Zone A','workload'=>3],
                ['name'=>'QuickShip','zone'=>'Zone B','workload'=>1],
                ['name'=>'RoadRunners','zone'=>'Zone C','workload'=>0],
            ];
        @endphp

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Pending Deliveries</h5></div>
                    <div class="card-body">
                        <div class="list-group" id="deliveries-list">
                            @foreach($deliveries as $d)
                                <div class="list-group-item d-flex justify-content-between align-items-start draggable" draggable="true">
                                    <div>
                                        <strong>{{ $d['order'] }}</strong> • <span class="small text-muted">{{ $d['customer'] }}</span>
                                        <div class="small text-muted">{{ $d['address'] }} • {{ $d['slot'] }} • {{ $d['zone'] }}</div>
                                    </div>
                                    <div>
                                        <span class="badge bg-secondary">{{ $d['zone'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header"><h5 class="card-title mb-0">Delivery Partners</h5></div>
                    <div class="card-body">
                        <div class="list-group" id="partners-list">
                            @foreach($partners as $p)
                                <div class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>{{ $p['name'] }}</strong>
                                        <div class="small text-muted">Zone: {{ $p['zone'] }}</div>
                                    </div>
                                    <div class="text-end">
                                        <div class="small text-muted">Workload: <strong>{{ $p['workload'] }}</strong></div>
                                        <div class="btn-group mt-2">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                            <button class="btn btn-sm btn-outline-primary">Assign</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="mt-3 small text-muted">Drag & drop example UI: drag a delivery item and drop onto a partner to assign (UI-only).</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection