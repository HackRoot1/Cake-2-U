@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Admin</strong> Dashboard</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="#" class="btn btn-outline-secondary me-2">Invite User</a>
                    <a href="#" class="btn btn-primary">New Project</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-xxl-5 d-flex">
                    <div class="w-100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Total Orders</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="shopping-cart"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">1,234</h1>
                                        <div class="mb-0">
                                            <span class="badge badge-success-light">+15%</span>
                                            <span class="text-muted">Since last month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Total Customers</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="users"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">856</h1>
                                        <div class="mb-0">
                                            <span class="badge badge-success-light">+8%</span>
                                            <span class="text-muted">Since last month</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Revenue (INR)</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="trending-up"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">₹5,40,000</h1>
                                        <div class="mb-0">
                                            <span class="badge badge-success-light">+12%</span>
                                            <span class="text-muted">Since last month</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col mt-0">
                                                <h5 class="card-title">Pending Orders</h5>
                                            </div>

                                            <div class="col-auto">
                                                <div class="stat text-primary">
                                                    <i class="align-middle" data-feather="clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h1 class="mt-1 mb-3">23</h1>
                                        <div class="mb-0">
                                            <span class="badge badge-warning-light">Pending</span>
                                            <span class="text-muted">Total</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-xxl-7">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="float-end">
                                <form class="row g-2">
                                    <div class="col-auto">
                                        <select class="form-select form-select-sm bg-light border-0">
                                            <option>Jan</option>
                                            <option value="1">Feb</option>
                                            <option value="2">Mar</option>
                                            <option value="3">Apr</option>
                                        </select>
                                    </div>
                                    <div class="col-auto">
                                        <input type="text"
                                            class="form-control form-control-sm bg-light rounded-2 border-0"
                                            style="width: 100px;" placeholder="Search...">
                                    </div>
                                </form>
                            </div>
                            <h5 class="card-title mb-0">Recent Movement</h5>
                        </div>
                        <div class="card-body pt-2 pb-3">
                            <div class="chart chart-sm">
                                <canvas id="chartjs-dashboard-line"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-3">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Top Flavors</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="py-3">
                                    <div class="chart chart-xs">
                                        <canvas id="chartjs-dashboard-pie"></canvas>
                                    </div>
                                </div>

                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-circle text-primary fa-fw"></i> Chocolate <span
                                                    class="badge badge-success-light">+20%</span></td>
                                            <td class="text-end">1,024</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-circle text-warning fa-fw"></i> Vanilla <span
                                                    class="badge badge-success-light">+8%</span></td>
                                            <td class="text-end">812</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-circle text-danger fa-fw"></i> Red Velvet <span
                                                    class="badge badge-success-light">+5%</span></td>
                                            <td class="text-end">540</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-circle text-dark fa-fw"></i> Black Forest</td>
                                            <td class="text-end">420</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Real-Time</h5>
                        </div>
                        <div class="card-body px-4">
                            <div id="world_map" style="height:350px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-1">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Events Calendar</h5>
                        </div>
                        <div class="card-body d-flex">
                            <div class="align-self-center w-100">
                                <div class="chart">
                                    <div id="datetimepicker-dashboard"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-8 col-xxl-9 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Recent Orders</h5>
                        </div>
                        <table class="table table-borderless my-0">
                            <thead>
                                <tr>
                                    <th>Order #</th>
                                    <th class="d-none d-xxl-table-cell">Customer</th>
                                    <th class="d-none d-xl-table-cell">Items</th>
                                    <th>Total</th>
                                    <th class="d-none d-xl-table-cell">Status</th>
                                    <th class="d-none d-xl-table-cell">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>#2025-000112</strong>
                                        <div class="text-muted">15 Dec 2025</div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Aarav Singh</strong>
                                        <div class="text-muted">Delhi</div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">3 items</td>
                                    <td>₹1,250</td>
                                    <td class="d-none d-xl-table-cell"><span class="badge bg-success">Confirmed</span></td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="#" class="btn btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>#2025-000113</strong>
                                        <div class="text-muted">16 Dec 2025</div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Rohit Verma</strong>
                                        <div class="text-muted">Bangalore</div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">1 item</td>
                                    <td>₹850</td>
                                    <td class="d-none d-xl-table-cell"><span class="badge bg-warning">Processing</span></td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="#" class="btn btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>#2025-000114</strong>
                                        <div class="text-muted">17 Dec 2025</div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Anjali Menon</strong>
                                        <div class="text-muted">Pune</div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">2 items</td>
                                    <td>₹2,400</td>
                                    <td class="d-none d-xl-table-cell"><span class="badge bg-danger">Cancelled</span></td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="#" class="btn btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>#2025-000115</strong>
                                        <div class="text-muted">18 Dec 2025</div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Priya Sharma</strong>
                                        <div class="text-muted">Mumbai</div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">5 items</td>
                                    <td>₹6,800</td>
                                    <td class="d-none d-xl-table-cell"><span class="badge bg-success">Delivered</span></td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="#" class="btn btn-outline-primary">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>#2025-000116</strong>
                                        <div class="text-muted">19 Dec 2025</div>
                                    </td>
                                    <td class="d-none d-xxl-table-cell">
                                        <strong>Neha Gupta</strong>
                                        <div class="text-muted">Pune</div>
                                    </td>
                                    <td class="d-none d-xl-table-cell">2 items</td>
                                    <td>₹1,650</td>
                                    <td class="d-none d-xl-table-cell"><span class="badge bg-info">Ready</span></td>
                                    <td class="d-none d-xl-table-cell">
                                        <a href="#" class="btn btn-outline-primary">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-xxl-3 d-flex">
                    <div class="card flex-fill w-100">
                        <div class="card-header">
                            <div class="card-actions float-end">
                                <div class="dropdown position-relative">
                                    <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                        <i class="align-middle" data-feather="more-horizontal"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <h5 class="card-title mb-0">Monthly Revenue</h5>
                        </div>
                        <div class="card-body d-flex w-100">
                            <div class="align-self-center chart chart-lg">
                                <canvas id="chartjs-dashboard-bar"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
