@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3 align-items-center">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Create</strong> Order</h3>
                </div>
                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to orders</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">New Order</h5>
                            <div class="small text-muted">Order # <strong>Auto</strong></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('orders.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label class="form-label">Customer</label>
                                        <select name="customer_id" class="form-select">
                                            <option value="">Select customer</option>
                                            <option value="1">John Doe &lt;johndoe@example.com&gt;</option>
                                            <option value="2">Jane Smith &lt;janesmith@example.com&gt;</option>
                                            <option value="3">Acme Corp &lt;orders@acme.example&gt;</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Payment method</label>
                                        <select name="payment_method" class="form-select">
                                            <option>Original payment method</option>
                                            <option>Store credit</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="form-label">Delivery method</label>
                                        <select name="delivery_method" class="form-select">
                                            <option>Standard</option>
                                            <option>Express</option>
                                            <option>Pickup</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="card mb-3">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h6 class="mb-0">Items</h6>
                                        <button type="button" class="btn btn-sm btn-outline-primary" id="addItemBtn">Add Item</button>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table mb-0" id="itemsTable">
                                                <thead>
                                                    <tr>
                                                        <th style="width:40%">Product</th>
                                                        <th>SKU / Variant</th>
                                                        <th style="width:80px">Qty</th>
                                                        <th class="text-end">Unit Price</th>
                                                        <th class="text-end">Line Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="product_name[]" class="form-control" value="Classic Leather Wallet">
                                                        </td>
                                                        <td><input type="text" name="product_sku[]" class="form-control" value="WAL-001"></td>
                                                        <td><input type="number" name="product_qty[]" value="1" min="1" class="form-control qty"></td>
                                                        <td class="text-end"><input type="number" name="product_price[]" step="0.01" value="45.00" class="form-control price"></td>
                                                        <td class="text-end line-total">$45.00</td>
                                                        <td><button type="button" class="btn btn-sm btn-outline-danger removeItem">Remove</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="product_name[]" class="form-control" value="Wireless Earbuds">
                                                        </td>
                                                        <td><input type="text" name="product_sku[]" class="form-control" value="EBX-5"></td>
                                                        <td><input type="number" name="product_qty[]" value="1" min="1" class="form-control qty"></td>
                                                        <td class="text-end"><input type="number" name="product_price[]" step="0.01" value="59.00" class="form-control price"></td>
                                                        <td class="text-end line-total">$59.00</td>
                                                        <td><button type="button" class="btn btn-sm btn-outline-danger removeItem">Remove</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header"><h6 class="mb-0">Shipping</h6></div>
                                            <div class="card-body">
                                                <div class="mb-2"><label class="form-label">Address</label>
                                                    <textarea name="shipping_address" class="form-control" rows="3">John Doe
123 Main St
Springfield, IL 62704</textarea>
                                                </div>
                                                <div class="mb-2"><label class="form-label">Scheduled delivery</label>
                                                    <input type="date" name="delivery_date" class="form-control" value="{{ date('Y-m-d') }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header"><h6 class="mb-0">Summary</h6></div>
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between small text-muted"><div>Subtotal</div><div id="subtotal">$104.00</div></div>
                                                <div class="d-flex justify-content-between small text-muted"><div>Discount</div><div id="discount">$0.00</div></div>
                                                <div class="d-flex justify-content-between small text-muted"><div>Shipping</div><div id="shipping">$5.00</div></div>
                                                <hr>
                                                <div class="d-flex justify-content-between"><div><strong>Total</strong></div><div><strong id="grandTotal">$109.00</strong></div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-end">
                                    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Create Order</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                function recalcTotals() {
                    var subtotal = 0;
                    document.querySelectorAll('#itemsTable tbody tr').forEach(function (tr) {
                        var qty = parseFloat(tr.querySelector('.qty').value) || 0;
                        var price = parseFloat(tr.querySelector('.price').value) || 0;
                        var line = qty * price;
                        tr.querySelector('.line-total').innerText = '$' + line.toFixed(2);
                        subtotal += line;
                    });
                    document.getElementById('subtotal').innerText = '$' + subtotal.toFixed(2);
                    var shipping = parseFloat(document.getElementById('shipping').innerText.replace('$','')) || 0;
                    var grand = subtotal + shipping;
                    document.getElementById('grandTotal').innerText = '$' + grand.toFixed(2);
                }

                document.getElementById('addItemBtn').addEventListener('click', function () {
                    var tbody = document.querySelector('#itemsTable tbody');
                    var tr = document.createElement('tr');
                    tr.innerHTML = '<td><input type="text" name="product_name[]" class="form-control" value="New product"></td>' +
                        '<td><input type="text" name="product_sku[]" class="form-control" value="SKU-NEW"></td>' +
                        '<td><input type="number" name="product_qty[]" value="1" min="1" class="form-control qty"></td>' +
                        '<td class="text-end"><input type="number" name="product_price[]" step="0.01" value="0.00" class="form-control price"></td>' +
                        '<td class="text-end line-total">$0.00</td>' +
                        '<td><button type="button" class="btn btn-sm btn-outline-danger removeItem">Remove</button></td>';
                    tbody.appendChild(tr);
                    tr.querySelector('.qty').addEventListener('input', recalcTotals);
                    tr.querySelector('.price').addEventListener('input', recalcTotals);
                });

                document.querySelector('#itemsTable').addEventListener('click', function (e) {
                    if (e.target && e.target.classList.contains('removeItem')) {
                        e.target.closest('tr').remove();
                        recalcTotals();
                    }
                });

                document.querySelectorAll('.qty, .price').forEach(function (el) {
                    el.addEventListener('input', recalcTotals);
                });

                recalcTotals();
            });
        </script>
    </main>
@endsection
