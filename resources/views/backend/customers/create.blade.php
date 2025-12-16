@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Create</strong> customer</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary">Back to customers</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">New customer</h5>
                            <h6 class="card-subtitle text-muted">Create a new customer by filling out the form below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('customers.store') }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputState">Status</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="" disabled>Select Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label for="firstname" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstname" name="firstname"
                                            placeholder="Enter Your First Name" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label for="lastname" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastname" name="lastname"
                                            placeholder="Enter Your Last Name" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">Email</label>
                                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">Phone Number</label>
                                        <input type="text" class="form-control" id="inputEmail4"
                                            placeholder="Phone Number">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPassword4">Password</label>
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Password">
                                    </div>
                                </div>

                                <hr>
                                <div class="row mb-3">
                                    <h5 class="card-title">Address Details</h5>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress"
                                            placeholder="1234 Main St">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputAddress2">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                            placeholder="Apartment, studio, or floor">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputState">Country</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputState">City</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="">Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-3">
                                        <label class="form-label" for="inputZip">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <input type="checkbox" class="form-check-input">
                                        <span class="form-check-label">Subscribe Newsletter</span>
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary">Create Customer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
