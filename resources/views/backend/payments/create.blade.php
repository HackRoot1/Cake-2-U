@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Create Transaction (Static UI)</h1>

            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Order Number</label>
                            <input class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Customer Name</label>
                            <input class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <input type="number" class="form-control" />
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-primary">Create (static)</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </main>
@endsection
