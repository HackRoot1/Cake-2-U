@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Edit</strong>Staff</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('staffs.index') }}" class="btn btn-secondary">Back to Staffs</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Staff</h5>
                            <h6 class="card-subtitle text-muted">Edit an existing staff by filling out the form below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('staffs.update', 1) }}">
                                @csrf

                                <div class="row mb-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputState">Role</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="" disabled>Select Role</option>
                                            <option>Admin</option>
                                            <option>Staff</option>
                                            <option>Customer</option>
                                        </select>
                                    </div>
                                   
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputState">Status</label>
                                        <select id="inputState" class="form-control">
                                            <option selected="" disabled>Select Status</option>
                                            <option>Active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
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

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputPassword4">Connfirm Password</label>
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Connfirm Password">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Role</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
