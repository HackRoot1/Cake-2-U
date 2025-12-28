@extends('backend.layouts.app')

@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row mb-2 align-items-center">
            <div class="col-auto d-none d-sm-block">
                <h3><strong>Delivery</strong> Reports</h3>
            </div>
            <div class="col-auto ms-auto text-end">
                <button class="btn btn-outline-secondary">Download CSV</button>
            </div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="h5 mb-0">95% <small class="text-muted">On-time</small></div>
                    <div class="small text-muted mt-1">On-time delivery percentage</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="h5 mb-0">32m <small class="text-muted">Avg</small></div>
                    <div class="small text-muted mt-1">Average delivery time</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="h5 mb-0">12 <small class="text-muted">Failed</small></div>
                    <div class="small text-muted mt-1">Total failed deliveries</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-3">
                    <div class="h5 mb-0">4 <small class="text-muted">Complaints</small></div>
                    <div class="small text-muted mt-1">Customer complaints</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header"><h5 class="mb-0">Partner Performance</h5></div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead><tr><th>Partner</th><th>On-time %</th><th>Avg Time</th><th>Deliveries</th></tr></thead>
                                <tbody>
                                    <tr><td>FastMove</td><td>95%</td><td>28m</td><td>120</td></tr>
                                    <tr><td>QuickShip</td><td>89%</td><td>35m</td><td>80</td></tr>
                                    <tr><td>RoadRunners</td><td>70%</td><td>45m</td><td>40</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-3">
                    <div class="card-header"><h5 class="mb-0">Issues Summary</h5></div>
                    <div class="card-body">
                        <div class="small text-muted">Chart placeholder (UI-only)</div>
                        <div class="mt-3 table-responsive">
                            <table class="table table-sm">
                                <thead><tr><th>Reason</th><th>Count</th></tr></thead>
                                <tbody>
                                    <tr><td>Customer unavailable</td><td>6</td></tr>
                                    <tr><td>Incorrect address</td><td>3</td></tr>
                                    <tr><td>Vehicle issue</td><td>2</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h5 class="mb-0">Cost Analysis</h5></div>
                    <div class="card-body small text-muted">Cost data placeholder (UI-only)</div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection