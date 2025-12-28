@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Partners</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-primary">Add Partner</button>
            </div>
        </div>

        @php
            $partners = [
                ['name'=>'FastMove','contact'=>'fast@example.com','zone'=>'Zone A','ontime'=>95,'rating'=>4.8,'total'=>120,'workload'=>3,'status'=>'Active'],
                ['name'=>'QuickShip','contact'=>'quick@example.com','zone'=>'Zone B','ontime'=>89,'rating'=>4.2,'total'=>80,'workload'=>1,'status'=>'Active'],
                ['name'=>'RoadRunners','contact'=>'road@example.com','zone'=>'Zone C','ontime'=>70,'rating'=>3.5,'total'=>40,'workload'=>0,'status'=>'Inactive'],
            ];
        @endphp

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Partner</th>
                                <th>Contact</th>
                                <th>Zone</th>
                                <th>On-time %</th>
                                <th>Rating</th>
                                <th>Total Deliveries</th>
                                <th>Current Workload</th>
                                <th>Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($partners as $p)
                                <tr>
                                    <td><strong>{{ $p['name'] }}</strong></td>
                                    <td>{{ $p['contact'] }}</td>
                                    <td>{{ $p['zone'] }}</td>
                                    <td>{{ $p['ontime'] }}%</td>
                                    <td>{{ $p['rating'] }}</td>
                                    <td>{{ $p['total'] }}</td>
                                    <td>{{ $p['workload'] }}</td>
                                    <td>@if($p['status'] === 'Active') <x-admin.badge type="success">Active</x-admin.badge> @else <x-admin.badge type="danger">Inactive</x-admin.badge> @endif</td>
                                    <td class="text-end">
                                        <div class="btn-group">
                                            <button class="btn btn-sm btn-outline-secondary">View</button>
                                            <button class="btn btn-sm btn-outline-secondary">Edit</button>
                                            <button class="btn btn-sm btn-outline-primary">Toggle</button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection