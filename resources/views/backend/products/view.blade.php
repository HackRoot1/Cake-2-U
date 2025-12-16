@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Product</strong> Detail</h3>
                    <div class="small text-muted">Overview and performance metrics for this product</div>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary me-2">Back to products</a>

                    <div class="btn-group">
                        <a href="{{ route('products.edit', $product->id ?? 0) }}" class="btn btn-primary">Edit</a>
                        <form method="POST" action="{{ route('products.duplicate', $product->id ?? 0) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-outline-secondary">Duplicate</button>
                        </form>
                        @if(isset($product->is_active) && $product->is_active)
                            <form method="POST" action="{{ route('products.deactivate', $product->id ?? 0) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-outline-warning">Archive</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('products.activate', $product->id ?? 0) }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-success">Activate</button>
                            </form>
                        @endif

                        <div class="btn-group ms-2">
                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Danger</button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <form method="POST" action="{{ route('products.destroy', $product->id ?? 0) }}" onsubmit="return confirm('Delete product and all related data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item text-danger">Delete Product</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            @php
                if(!isset($product)){
                    $product = (object)[
                        'id' => 1,
                        'name' => 'Demo Product',
                        'sku' => 'DEM-001',
                        'image_url' => 'https://placehold.co/600x400',
                        'price' => 499.00,
                        'stock' => 25,
                        'is_active' => true,
                        'category_name' => 'Demo Category',
                        'short_description' => 'This is a demo short description for product view.',
                        'description' => '<p>This is a <strong>demo</strong> product description. Replace with real content from controller.</p>',
                    ];
                }

                $metrics = $metrics ?? [
                    'views' => 1234,
                    'sales' => 56,
                    'reviews' => 12,
                    'wishlists' => 34,
                    'popularity' => 78,
                    'revenue' => 12345.67
                ];

                if(!isset($salesTrend)){
                    $salesTrend = [];
                    for($i=29;$i>=0;$i--){
                        $date = \Carbon\Carbon::today()->subDays($i)->format('M j');
                        $salesTrend[$date] = rand(0,5);
                    }
                }

                $reviews = $reviews ?? [
                    (object)['author_name' => 'Alice', 'created_at' => \Carbon\Carbon::today()->subDays(2), 'rating' => 5, 'comment' => 'Excellent product!'],
                    (object)['author_name' => 'Bob', 'created_at' => \Carbon\Carbon::today()->subDays(10), 'rating' => 4, 'comment' => 'Very good, would buy again.']
                ];

                $recentSales = $recentSales ?? [
                    (object)['order_id' => 1010, 'created_at' => \Carbon\Carbon::today()->subDays(1), 'quantity' => 2, 'total' => 998.00],
                    (object)['order_id' => 1009, 'created_at' => \Carbon\Carbon::today()->subDays(3), 'quantity' => 1, 'total' => 499.00]
                ];
            @endphp

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Product card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="{{ $product->image_url ?? 'https://placehold.co/600x400' }}" alt="Product" class="rounded img-fluid" style="width:180px;height:180px;object-fit:contain;">

                            <h4 class="mt-3 mb-0">{{ $product->name ?? 'Unnamed Product' }}</h4>
                            <div class="small text-muted mb-2">SKU: {{ $product->sku ?? '—' }}</div>

                            <div class="mb-2">
                                <span class="h4">₹{{ number_format($product->price ?? 0, 2) }}</span>
                                @if(isset($product->is_active) && !$product->is_active)
                                    <div><span class="badge bg-secondary">Inactive</span></div>
                                @elseif(isset($product->stock) && $product->stock == 0)
                                    <div><span class="badge bg-danger">Out of stock</span></div>
                                @else
                                    <div><span class="badge bg-success">In stock</span></div>
                                @endif
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('products.edit', $product->id ?? 0) }}" class="btn btn-primary">Edit Product</a>
                                <a href="{{ route('products.duplicate', $product->id ?? 0) }}" class="btn btn-outline-secondary">Duplicate</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Category</strong>
                                <div class="small text-muted mt-1">{{ $product->category_name ?? '—' }}</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Stock</strong>
                                <div class="small text-muted mt-1">{{ $product->stock ?? 0 }} available</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Short Description</strong>
                                <div class="small text-muted mt-1">{{ Str::limit($product->short_description ?? '', 120) }}</div>
                            </li>
                        </ul>
                    </div>

                    <!-- Performance stats -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Performance</h5>
                        </div>
                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="small text-muted">Views</div>
                                    <div class="h4">{{ $metrics['views'] ?? 0 }}</div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="small text-muted">Sales</div>
                                    <div class="h4">{{ $metrics['sales'] ?? 0 }}</div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="small text-muted">Reviews</div>
                                    <div class="h4">{{ $metrics['reviews'] ?? 0 }}</div>
                                </div>
                                <div class="col-6 col-md-6 mb-3">
                                    <div class="small text-muted">Wishlists</div>
                                    <div class="h4">{{ $metrics['wishlists'] ?? 0 }}</div>
                                </div>
                            </div>

                            <hr>
                            <div class="small text-muted">Popularity</div>
                            <div class="h5">{{ $metrics['popularity'] ?? '—' }} / 100</div>
                        </div>
                    </div>

                    <!-- Quick actions -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="{{ route('products.edit', $product->id ?? 0) }}" class="btn btn-sm btn-primary w-100 mb-2">Edit</a>
                            <form method="POST" action="{{ route('products.duplicate', $product->id ?? 0) }}" class="mb-2">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-secondary w-100">Duplicate</button>
                            </form>
                            <form method="POST" action="{{ route('products.deactivate', $product->id ?? 0) }}" class="mb-2">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-warning w-100">Archive / Deactivate</button>
                            </form>
                            <form method="POST" action="{{ route('products.destroy', $product->id ?? 0) }}" onsubmit="return confirm('Delete product and all related data?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger w-100">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Top metrics / chart -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex w-100 align-items-center justify-content-between mb-3">
                                <div>
                                    <h5 class="card-title mb-0">Sales Trend</h5>
                                    <div class="small text-muted">Last 30 days</div>
                                </div>
                                <div class="text-end">
                                    <div class="h5 mb-0">{{ $metrics['sales'] ?? 0 }} sales</div>
                                    <div class="small text-muted">{{ isset($metrics['revenue']) ? '₹'.number_format($metrics['revenue'],2) : '' }}</div>
                                </div>
                            </div>

                            <canvas id="salesTrendChart" height="120"></canvas>
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Description</h5>
                            <a href="{{ route('products.edit', $product->id ?? 0) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                        </div>
                        <div class="card-body">
                            {!! $product->description ?? '<div class="small text-muted">No description provided.</div>' !!}
                        </div>
                    </div>

                    <!-- Reviews -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Reviews ({{ $metrics['reviews'] ?? 0 }})</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">Manage Reviews</a>
                        </div>
                        <div class="card-body">
                            @if(isset($reviews) && count($reviews))
                                <ul class="list-group list-group-flush">
                                    @foreach($reviews as $r)
                                        <li class="list-group-item">
                                            <div class="d-flex justify-content-between"><div><strong>{{ $r->author_name ?? 'User' }}</strong> <span class="small text-muted">— {{ $r->created_at ? $r->created_at->format('Y-m-d') : '' }}</span></div><div class="text-end">{{ $r->rating ?? '—' }}/5</div></div>
                                            <div class="mt-2 small">{{ $r->comment ?? '' }}</div>
                                        </li>
                                    @endforeach
                                </ul>
                            @else
                                <div class="small text-muted">No reviews yet.</div>
                            @endif
                        </div>
                    </div>

                    <!-- Recent sales table -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Recent Sales</h5>
                            <a href="#" class="btn btn-sm btn-outline-primary">View All</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Qty</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($recentSales ?? [] as $s)
                                            <tr>
                                                <td><a href="{{ route('orders.show', $s->order_id ?? '#') }}">#{{ $s->order_id }}</a></td>
                                                <td>{{ isset($s->created_at) ? $s->created_at->format('Y-m-d') : '—' }}</td>
                                                <td>{{ $s->quantity ?? 1 }}</td>
                                                <td class="text-end">₹{{ number_format($s->total ?? 0, 2) }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4" class="small text-muted">No recent sales.</td>
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
    </main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    (function(){
        const ctx = document.getElementById('salesTrendChart');
        if(!ctx) return;

        const labels = {!! json_encode(array_keys($salesTrend ?? [])) !!};
        const data = {!! json_encode(array_values($salesTrend ?? [])) !!};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales',
                    data: data,
                    borderColor: '#0d6efd',
                    backgroundColor: 'rgba(13,110,253,0.08)',
                    tension: 0.25,
                    fill: true,
                }]
            },
            options: {
                plugins: { legend: { display: false } },
                scales: { x: { display: true }, y: { beginAtZero: true } }
            }
        });
    })();
</script>
@endpush 