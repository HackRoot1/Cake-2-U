@extends('backend.layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-3">Payment Reports</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>Daily Summary</h6>
                    <p class="display-6">₹ 18,500</p>
                    <small>Completed: 32 • Failed: 1 • Refunded: ₹ 1,200</small>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>Weekly Summary</h6>
                    <p class="display-6">₹ 98,300</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>Monthly Summary</h6>
                    <p class="display-6">₹ 412,600</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h6>Payment Method Breakdown</h6>
            <ul>
                <li>Card: ₹ 240,000</li>
                <li>UPI: ₹ 100,000</li>
                <li>Net Banking: ₹ 50,000</li>
                <li>Wallet: ₹ 22,600</li>
            </ul>
        </div>
    </div>
</div>
@endsection
