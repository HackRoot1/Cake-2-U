@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-3">Edit Transaction (Static UI)</h1>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Transaction ID</label>
                    <input class="form-control" readonly value="txn_0001" />
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                        <option>Completed</option>
                        <option>Pending</option>
                        <option>Failed</option>
                        <option>Refunded</option>
                    </select>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary">Save (static)</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
