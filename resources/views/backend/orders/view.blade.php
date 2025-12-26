@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Order</strong> Details</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary me-2">Back to orders</a>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">Order <strong>#{{ $order_id ?? '2001' }}</strong></h5>
                                <div class="small text-muted">Placed on: 2025-12-20</div>
                                <div class="small text-muted">Payment: Visa ending *4242</div>
                            </div>

                            <div class="text-end">
                                <div class="mb-2"><span class="badge bg-warning">Processing</span></div>
                                <div class="mb-2">Total: <strong>$122.50</strong></div>
                                <div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Print</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">Invoice</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Items (detailed table) -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Order Items</h5>
                            <div class="small text-muted">3 items</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Customization</th>
                                            <th>Qty</th>
                                            <th class="text-end">Unit Price</th>
                                            <th class="text-end">Item Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="{{ asset('img/products/product-1.jpg') }}" alt="" class="rounded me-3 img-fluid" style="width:56px;height:56px;object-fit:cover;max-width:56px;">
                                                <div>
                                                    <div><strong>Classic Leather Wallet</strong></div>
                                                    <div class="small text-muted">SKU: WAL-001</div>
                                                </div>
                                            </td>
                                            <td>Color: Brown</td>
                                            <td>1</td>
                                            <td class="text-end">$45.00</td>
                                            <td class="text-end">$45.00</td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="{{ asset('img/products/product-2.jpg') }}" alt="" class="rounded me-3 img-fluid" style="width:56px;height:56px;object-fit:cover;max-width:56px;">
                                                <div>
                                                    <div><strong>Wireless Earbuds</strong></div>
                                                    <div class="small text-muted">Model: EBX-5</div>
                                                </div>
                                            </td>
                                            <td>Color: Black</td>
                                            <td>1</td>
                                            <td class="text-end">$59.00</td>
                                            <td class="text-end">$59.00</td>
                                        </tr>

                                        <tr>
                                            <td class="d-flex align-items-center">
                                                <img src="{{ asset('img/products/product-3.jpg') }}" alt="" class="rounded me-3 img-fluid" style="width:56px;height:56px;object-fit:cover;max-width:56px;">
                                                <div>
                                                    <div><strong>Travel Organizer</strong></div>
                                                    <div class="small text-muted">Variant: Compact</div>
                                                </div>
                                            </td>
                                            <td>Color: Grey</td>
                                            <td>1</td>
                                            <td class="text-end">$18.50</td>
                                            <td class="text-end">$18.50</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="small text-muted">Special instructions</div>
                                    <div class="mb-2">Please leave at the front desk if nobody is available.</div>

                                    <div class="small text-muted">Recipient</div>
                                    <div>John Doe — <a href="tel:+1234567890">+1 234 567 890</a></div>
                                </div>

                                <div class="col-12 col-md-6">
                                    <div class="d-flex justify-content-end">
                                        <div class="w-50">
                                            <div class="d-flex justify-content-between small text-muted"><div>Subtotal</div><div>$122.50</div></div>
                                            <div class="d-flex justify-content-between small text-muted"><div>Discount</div><div>-$5.00</div></div>
                                            <div class="d-flex justify-content-between small text-muted"><div>Shipping</div><div>$5.00</div></div>
                                            <div class="d-flex justify-content-between small text-muted"><div>Tax</div><div>$0.00</div></div>
                                            <hr>
                                            <div class="d-flex justify-content-between"><div><strong>Total</strong></div><div><strong>$122.50</strong></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Shipping, Billing, Status & Actions -->
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Delivery Information</h5>
                                </div>
                                <div class="card-body">
                                    <div class="small text-muted">Deliver to:</div>
                                    <div class="mt-2">John Doe<br>123 Main St, Apt 4B<br>Springfield, IL 62704<br>USA</div>

                                    <hr>
                                    <div class="small text-muted">Scheduled delivery</div>
                                    <div class="mt-1"><strong>2025-12-24</strong> · 10:00 - 12:00</div>

                                    <hr>
                                    <div class="small text-muted">Special instructions</div>
                                    <div class="mt-1">Leave at front desk if recipient not available.</div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Billing & Payment</h5>
                                </div>
                                <div class="card-body">
                                    <div class="small text-muted">Billed to:</div>
                                    <div class="mt-1">John Doe<br>456 Billing Ave<br>Springfield, IL 62701</div>

                                    <hr>
                                    <div class="small text-muted">Payment</div>
                                    <div class="mt-1">Visa ending <strong>*4242</strong> · Transaction ID: <strong>TXN-20251220-2001</strong></div>
                                    <div class="mt-2"><span class="badge bg-success">Payment Completed</span></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="card mb-3">
                                <div class="card-header d-flex align-items-center justify-content-between">
                                    <h5 class="card-title mb-0">Order Status</h5>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <div class="small text-muted">Current status</div>
                                        <div class="mt-1"><span class="badge bg-warning text-dark">Processing</span></div>
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Update status</label>
                                        <div class="d-flex gap-2">
                                            <select id="statusSelect" class="form-select w-50">
                                                <option value="pending">Pending</option>
                                                <option value="processing" selected>Processing</option>
                                                <option value="packed">Packed</option>
                                                <option value="shipped">Shipped</option>
                                                <option value="out_for_delivery">Out for Delivery</option>
                                                <option value="delivered">Delivered</option>
                                                <option value="cancelled">Cancelled</option>
                                                <option value="returned">Returned</option>
                                            </select>
                                            <button class="btn btn-primary" id="updateStatusBtn">Update</button>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input type="checkbox" id="notifyCustomer" class="form-check-input">
                                            <label class="form-check-label" for="notifyCustomer">Notify customer (SMS/Email)</label>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <a href="{{ route('orders.edit', $order_id ?? 2001) }}" class="btn btn-outline-secondary">Edit Order</a>
                                        <button class="btn btn-danger" id="cancelBtn" data-bs-toggle="modal" data-bs-target="#cancelModalView">Cancel</button>
                                        <button class="btn btn-warning" id="refundBtn" data-bs-toggle="modal" data-bs-target="#refundModalView">Refund</button>
                                        <form method="POST" action="{{ route('orders.print', $order_id ?? 2001) }}" class="d-inline">
                                            @csrf
                                            <button class="btn btn-outline-dark">Print</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Status timeline -->
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Status Timeline</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="timeline list-unstyled mb-0">
                                        <li class="mb-2"><strong>2025-12-20 14:10</strong> — Order placed</li>
                                        <li class="mb-2"><strong>2025-12-20 15:00</strong> — Payment completed</li>
                                        <li class="mb-2"><strong>2025-12-21 09:00</strong> — Processing (current)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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

        <!-- Cancel Modal for View -->
        <div class="modal fade" id="cancelModalView" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('orders.cancel', $order_id ?? 2001) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="cancelModalLabel">Cancel Order #{{ $order_id ?? '2001' }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Reason for cancellation</label>
                                <textarea name="reason" class="form-control" rows="3" placeholder="Optional note to record why this order was cancelled"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="refund_if_paid" id="refundIfPaidView">
                                <label class="form-check-label" for="refundIfPaidView">Process refund if payment already captured</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Confirm Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Refund Modal for View -->
        <div class="modal fade" id="refundModalView" tabindex="-1" aria-labelledby="refundModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="POST" action="{{ route('orders.refund', $order_id ?? 2001) }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="refundModalLabel">Refund Order #{{ $order_id ?? '2001' }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Refund amount (max ${{ number_format(122.50,2) }})</label>
                                <input type="number" step="0.01" min="0" max="122.50" name="amount" class="form-control" value="0.00">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Reason</label>
                                <textarea name="reason" class="form-control" rows="3" placeholder="Reason for refund (optional)"></textarea>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="restock_items" id="restockItemsView">
                                <label class="form-check-label" for="restockItemsView">Restock items</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Confirm Refund</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Handle update status via fetch
                var updateBtn = document.getElementById('updateStatusBtn');
                if (updateBtn) {
                    updateBtn.addEventListener('click', function () {
                        var status = document.getElementById('statusSelect').value;
                        var notify = document.getElementById('notifyCustomer').checked;
                        if (!confirm('Update status to ' + status + '?')) return;

                        fetch("{{ route('orders.update-status', $order_id ?? 2001) }}", {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({ status: status, notify: notify })
                        }).then(function (res) { return res.text(); }).then(function (text) {
                            // Server currently redirects back with a status message; reload to reflect change
                            alert(text || 'Status updated');
                            location.reload();
                        }).catch(function (err) {
                            alert('Error updating status');
                        });
                    });
                }
            });
        </script>
    </main>
@endsection 