@extends('backend.layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3><strong>Edit</strong> Permission</h3>
                </div>

                <div class="col-auto ms-auto text-end mt-n1">
                    <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back to Permissions</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Edit Permission</h5>
                            <h6 class="card-subtitle text-muted">Edit an existing permission by filling out the form below.</h6>
                        </div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('permissions.update', $permission->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter permission name" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Permission</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
