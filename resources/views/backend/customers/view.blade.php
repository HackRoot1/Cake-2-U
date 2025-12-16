@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Customer</strong> Profile</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary me-2">Back to customers</a>

                    <div class="btn-group">
                        <a href="{{ route('customers.edit', $customer->id ?? 0) }}" class="btn btn-primary">Edit</a>
                        <button class="btn btn-outline-primary" onclick="window.location='#sendPromo'">Send Promo</button>
                        @if(isset($customer->status) && $customer->status == 'active')
                            <form method="POST" action="{{ route('customers.block', $customer->id ?? 0) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-dark">Block</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('customers.unblock', $customer->id ?? 0) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success">Unblock</button>
                            </form>
                        @endif

                        <div class="btn-group ms-2">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Actions</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form method="POST" action="{{ route('customers.destroy', $customer->id ?? 0) }}" onsubmit="return confirm('Delete customer and all related data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">Delete Customer</button>
                                    </form>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('customers.export', $customer->id ?? 0) }}">Export Data</a></li>
                                <li><a class="dropdown-item" href="#merge">Merge Duplicates</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Profile card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="{{ $customer->avatar_url ?? asset('img/avatars/avatar.jpg') }}" alt="Profile" class="rounded-circle img-fluid" style="width:120px;height:120px;object-fit:cover;">

                            <h4 class="mt-3 mb-0">{{ ($customer->first_name ?? '') . ' ' . ($customer->last_name ?? '') ?: 'Unknown' }}</h4>
                            <div class="small text-muted mb-2">{{ $customer->email ?? '—' }}</div>

                            <div class="mb-2">
                                @if(isset($customer->status) && $customer->status == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-secondary">Inactive</span>
                                @endif
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('customers.edit', $customer->id ?? 0) }}" class="btn btn-primary">Edit Customer</a>
                                <button class="btn btn-outline-info" onclick="location.href='#addCredit'">Add Credit / Discount</button>
                                <button class="btn btn-outline-warning" onclick="location.href='#sendPromo'">Send Promotional Message</button>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Contact</strong>
                                <div class="small text-muted mt-1">
                                    Email: <a href="mailto:{{ $customer->email ?? '' }}">{{ $customer->email ?? '—' }}</a><br>
                                    Phone: <a href="tel:{{ $customer->phone ?? '' }}">{{ $customer->phone ?? '—' }}</a>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Account</strong>
                                <div class="small text-muted mt-1">
                                    Registered: {{ isset($customer->created_at) ? $customer->created_at->format('Y-m-d') : '—' }}<br>
                                    Last Login: {{ isset($customer->last_login_at) ? $customer->last_login_at->format('Y-m-d H:i') : '—' }}
                                </div>
                            </li>

                            <li class="list-group-item">
                                <strong>Loyalty</strong>
                                <div class="small text-muted mt-1">Points: <strong>{{ $customer->loyalty_points ?? 0 }}</strong></div>
                            </li>

                            <li class="list-group-item">
                                <strong>Referral</strong>
                                <div class="small text-muted mt-1">Referred by: {{ $customer->referred_by_name ?? '—' }}</div>
                            </li>
                        </ul>
                    </div>

                    <!-- Saved addresses -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Saved Addresses</h5>
                        </div>
                        <div class="card-body">
                            @if(isset($addresses) && count($addresses))
                                <ul class="list-group list-group-flush">
                                    @foreach($addresses as $addr)
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div>
                                                <div class="fw-bold">{{ $addr->label ?? 'Address' }}</div>
                                                <div class="small text-muted">{{ $addr->line1 }}, {{ $addr->city }} {{ $addr->postcode }}</div>
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
                            @if(isset($payments) && count($payments))
                                <ul class="list-group list-group-flush">
                                    @foreach($payments as $p)
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="small">
                                                {{ strtoupper($p->brand ?? 'Card') }} •••• {{ $p->last4 ?? '****' }} <span class="text-muted">(Exp {{ $p->exp_month }}/{{ $p->exp_year }})</span>
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
                                        <div class="small">₹{{ number_format(($customer->total_spent ?? 0) / max(1, ($customer->orders_count ?? 0)), 2) }}</div>
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
                                    <div class="small text-muted">Balance: <strong>{{ $customer->loyalty_points ?? 0 }}</strong></div>
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
                                                <td>{{ isset($order->created_at) ? $order->created_at->format('Y-m-d') : '—' }}</td>
                                                <td>{{ $order->status ?? '—' }}</td>
                                                <td class="text-end">₹{{ number_format($order->total ?? 0, 2) }}</td>
                                                <td class="text-end"><a href="#" class="btn btn-sm btn-outline-primary">View</a></td>
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
                                    @if(isset($notes) && count($notes))
                                        <ul class="list-group list-group-flush">
                                            @foreach($notes as $note)
                                                <li class="list-group-item">
                                                    <div class="small text-muted">{{ isset($note->created_at) ? $note->created_at->format('Y-m-d H:i') : '—' }} — <strong>{{ $note->author_name ?? 'Admin' }}</strong></div>
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
                                                        <td>{{ isset($c->created_at) ? $c->created_at->format('Y-m-d') : '—' }}</td>
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