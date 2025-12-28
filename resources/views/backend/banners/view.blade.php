@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('banner.index') }}">Banners</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Homepage Hero</li>
                        </ol>
                    </nav>
                    <h3><strong>Banner</strong> Detail</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('banner.index') }}" class="btn btn-secondary me-2">Back to banners</a>

                    <div class="btn-group">
                        <a href="{{ route('banner.edit', 1) }}" class="btn btn-primary">Edit</a>
                        <button onclick="alert('Previewing banner...')" class="btn btn-outline-secondary">Preview</button>
                        <form onsubmit="return confirm('Delete banner and its metrics? This action cannot be undone.');" class="d-inline">
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <!-- Category card -->
                    <div class="card mb-3">
                        <div class="card-body text-center">
                            <img src="/img/placeholder-600x300.png" alt="Homepage Hero" class="rounded img-fluid" style="width:100%;height:200px;object-fit:cover;">

                            <h4 class="mt-3 mb-0">Homepage Hero</h4>
                            <div class="small text-muted mb-2">Alt text: <code>Homepage hero showing featured promo</code></div>

                            <div class="mb-2">
                                <span class="badge bg-success">Active</span>
                                <span class="ms-2 small text-muted">Audience: <strong>All Users</strong></span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('banner.edit', 1) }}" class="btn btn-primary">Edit Banner</a>
                                <a href="#" class="btn btn-outline-secondary" onclick="alert('Previewing banner...')">Preview</a>
                            </div>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <strong>Description</strong>
                                <div class="small text-muted mt-1">Large hero banner for holiday sale.</div>
                            </li>

                            <li class="list-group-item">
                                <strong>Scheduling</strong>
                                <div class="small text-muted mt-1">Display: 2024-12-01 → 2025-01-01</div>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <strong>Site Link</strong>
                                    <div class="small text-muted mt-1"><a href="https://example.com/sale">https://example.com/sale</a></div>
                                </div>
                                <div class="text-end">
                                    <strong>Order</strong>
                                    <div class="small text-muted mt-1">1</div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- Sub-categories -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Sub-categories</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <div>
                                        <strong>— No sub-categories</strong>
                                        <div class="small text-muted">Add sub-categories to build multi-level hierarchy.</div>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-outline-primary">Add</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <style>
                        @media (max-width: 575.98px) {
                            .card-body img { height: auto !important; }
                            .btn-group { display:flex; flex-direction:column; gap:0.5rem; }
                            .btn-group .btn { width:100%; }
                        }
                    </style>
                </div>

                <div class="col-12 col-lg-8">
                    <!-- Performance card -->
                    <div class="card mb-3">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Banner Performance</h5>
                            <div>
                                <small class="text-muted">Last 30 days</small>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row text-center">
                                <div class="col-4">
                                    <h4 class="mb-0">12,345</h4>
                                    <div class="small text-muted">Views</div>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">345</h4>
                                    <div class="small text-muted">Clicks</div>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0">2.8%</h4>
                                    <div class="small text-muted">CTR</div>
                                </div>
                            </div>

                            <hr>

                            <div class="small text-muted">Recent clicks by URL (sample)</div>
                            <div class="mt-2 table-responsive">
                                <table class="table table-sm mb-0">
                                    <thead>
                                        <tr><th>Timestamp</th><th>URL</th><th class="text-end">Clicks</th></tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>2024-12-20 14:23</td><td>https://example.com/sale</td><td class="text-end">120</td></tr>
                                        <tr><td>2024-12-18 09:12</td><td>https://example.com/sale</td><td class="text-end">75</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Notes & history -->
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Notes & History</h5>
                            <div>
                                <button class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="small text-muted">No recent changes. Use the edit form to update scheduling and target audience.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection 