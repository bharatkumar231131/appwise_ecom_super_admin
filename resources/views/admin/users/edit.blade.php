{{--
@extends('components.admin.layouts')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Create User</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="post">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">User Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Enter user name" value="{{ old('name', $user->name) }}">
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">User Email</label>
    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
        placeholder="Enter user email" value="{{ old('name', $user->email) }}">
    @error('email')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Assign Permissions</label>
    <div class="row">
        @forelse($roles as $role)
        <div class="col-sm-6 mb-2">
            <div class="form-check">

                <input {{ ($hasRoles->contains($role->id)) ? 'checked' : '' }} type="checkbox" name="role[]"
                    id="role-{{ $role->id }}" value="{{ $role->name }}" class="form-check-input">
                <label for="role-{{ $role->id }}" class="form-check-label">
                    {{ $role->name }}
                </label>
            </div>
        </div>
        @empty
        <p class="text-muted">No permissions available.</p>
        @endforelse
    </div>
</div>

<div class="text-center">
    <button type="submit" class="btn btn-success btn-lg px-5">Submit</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection

--}}


@extends('components.admin.layouts')
@section('content')
<div class="container">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </nav>
                <h1 class="h3 m-0">Edit User</h1>
            </div>
        </div>
    </div>

    <div class="mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @if (Session::has('error_message'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Error:</strong> {{ Session::get('error_message') }}
                            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                        @if (Session::has('success_message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success:</strong> {{ Session::get('success_message') }}
                            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                        @endif

                        <form action="{{ route('users.update', $user->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name">User Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter User Name" name="name"
                                            value="{{ old('name', $user->name) }}" required>
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="email">User Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter User Email" name="email"
                                            value="{{ old('email', $user->email) }}" required>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Assign Roles</label>
                                            <div class="row">
                                                @forelse($roles as $role)
                                                <div class="col-sm-6 mb-2">
                                                    <div class="form-check">
                                                        <input {{ ($hasRoles->contains($role->id)) ? 'checked' : '' }} type="checkbox" name="role[]"
                                                            id="role-{{ $role->id }}" value="{{ $role->name }}" class="form-check-input">
                                                        <label for="role-{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
                                                    </div>
                                                </div>
                                                @empty
                                                <p class="text-muted">No roles available.</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection