@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Coupon</strong> Details</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('coupons.index') }}" class="btn btn-secondary me-2">Back to coupons</a>

                    <div class="btn-group">
                        <a href="#edit" class="btn btn-primary">Edit</a>
                        <button type="button" class="btn btn-outline-warning">Deactivate</button>
                        <button type="button" class="btn btn-outline-danger"
                            onclick="if(confirm('Delete coupon and all related usage?')){alert('Deleted (sample)');}">Delete</button>
                        <a href="#" class="btn btn-outline-secondary">Export</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Coupon card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <h4 class="mt-3 mb-0">SAVE20</h4>
                            <div class="small text-muted mb-2">20% off on all items above ₹500</div>

                            <div class="mb-2">
                                <span class="badge bg-success">Active</span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('coupons.edit', $coupon->id ?? 0) }}" class="btn btn-primary">Edit
                                    Coupon</a>
                                <a href="#" class="btn btn-outline-info">Send Promo</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Validity</strong>
                                <div class="small text-muted mt-1">2025-01-01 → 2025-03-31</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Discount</strong>
                                <div class="small text-muted mt-1">Percentage — 20%</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Usage</strong>
                                <div class="small text-muted mt-1">Total uses: 150<br>Limit: 1000</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Performance card -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Performance</h5>
                            <div class="row">
                                <div class="col-6">
                                    <div class="h4 mb-0">150</div>
                                    <div class="small text-muted">Total Uses</div>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="h4 mb-0">₹1,234.50</div>
                                    <div class="small text-muted">Total Discount Given</div>
                                </div>
                            </div>

                            <hr>
                            <canvas id="couponUsageChart" height="120"></canvas>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Customers who used this coupon</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">Export list</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th class="text-end">Amount Discounted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Alice Kumar</td>
                                            <td>2025-01-10</td>
                                            <td class="text-end">₹50.00</td>
                                        </tr>
                                        <tr>
                                            <td>Rahul Singh</td>
                                            <td>2025-02-05</td>
                                            <td class="text-end">₹30.00</td>
                                        </tr>
                                        <tr>
                                            <td>Priya Patel</td>
                                            <td>2025-03-12</td>
                                            <td class="text-end">₹154.50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Saved Addresses</h5>
                </div>
                <div class="card-body">
                    @if (isset($addresses) && count($addresses))
                        <ul class="list-group list-group-flush">
                            @foreach ($addresses as $addr)
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fw-bold">{{ $addr->label ?? 'Address' }}</div>
                                        <div class="small text-muted">{{ $addr->line1 }}, {{ $addr->city }}
                                            {{ $addr->postcode }}</div>
                                    </div>
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        <form method="POST" action="#" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="small text-muted">No saved addresses.</div>
                    @endif
                </div>
            </div>

            <!-- Payment methods -->
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Payment Methods</h5>
                </div>
                <div class="card-body">
                    @if (isset($payments) && count($payments))
                        <ul class="list-group list-group-flush">
                            @foreach ($payments as $p)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div class="small">
                                        {{ strtoupper($p->brand ?? 'Card') }} •••• {{ $p->last4 ?? '****' }} <span
                                            class="text-muted">(Exp {{ $p->exp_month }}/{{ $p->exp_year }})</span>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        <form method="POST" action="#" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <div class="small text-muted">No payment methods on file.</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-8">
            <!-- Summary cards -->
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Order Summary</h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="h4 mb-0">{{ $customer->orders_count ?? 0 }}</div>
                                    <div class="small text-muted">Total Orders</div>
                                </div>
                                <div class="text-end">
                                    <div class="h5 mb-0">₹{{ number_format($customer->total_spent ?? 0, 2) }}</div>
                                    <div class="small text-muted">Total Spent</div>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <div class="small text-muted">Avg order</div>
                                <div class="small">
                                    ₹{{ number_format(($customer->total_spent ?? 0) / max(1, $customer->orders_count ?? 0), 2) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Most used delivery</h6>
                            <div class="small text-muted">{{ $customer->most_used_address ?? '—' }}</div>

                            <hr>
                            <h6 class="card-title">Rewards</h6>
                            <div class="small text-muted">Balance: <strong>{{ $customer->loyalty_points ?? 0 }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders list -->
            <div class="card mb-3">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title mb-0">Order History</h5>
                    <a href="#" class="btn btn-sm btn-outline-primary">View All Orders</a>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th class="text-end">Total</th>
                                    <th class="text-end">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($orders ?? [] as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ isset($order->created_at) ? $order->created_at->format('Y-m-d') : '—' }}
                                        </td>
                                        <td>{{ $order->status ?? '—' }}</td>
                                        <td class="text-end">₹{{ number_format($order->total ?? 0, 2) }}</td>
                                        <td class="text-end"><a href="#"
                                                class="btn btn-sm btn-outline-primary">View</a></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="small text-muted">No orders found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Notes & Contact history -->
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Internal Notes</h5>
                            <a href="#addNote" class="btn btn-sm btn-outline-primary">Add Note</a>
                        </div>
                        <div class="card-body">
                            @if (isset($notes) && count($notes))
                                <ul class="list-group list-group-flush">
                                    @foreach ($notes as $note)
                                        <li class="list-group-item">
                                            <div class="small text-muted">
                                                {{ isset($note->created_at) ? $note->created_at->format('Y-m-d H:i') : '—' }}
                                                — <strong>{{ $note->author_name ?? 'Admin' }}</strong></div>
                                            <div class="mt-1">{{ $note->message }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div class="small text-muted">No notes yet.</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Contact History</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">Send Message</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Summary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($contactHistory ?? [] as $c)
                                            <tr>
                                                <td>{{ isset($c->created_at) ? $c->created_at->format('Y-m-d') : '—' }}
                                                </td>
                                                <td>{{ $c->type ?? '—' }}</td>
                                                <td>{{ $c->summary ?? '—' }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="small text-muted">No contact history.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </main>
@endsection
