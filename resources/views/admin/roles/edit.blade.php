{{--
@extends('components.admin.layouts')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Create Role</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.update', $role->id) }}" method="post">
@csrf
<div class="mb-3">
    <label for="name" class="form-label">Role Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
        placeholder="Enter role name" value="{{ old('name', $role->name) }}">
    @error('name')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Assign Permissions</label>
    <div class="row">
        @forelse($permissions as $permission)
        <div class="col-sm-6 mb-2">
            <div class="form-check">
                <input {{ ($hasPermissions->contains($permission->name)) ? 'checked' : '' }} type="checkbox" name="permission[]"
                    id="permission-{{ $permission->id }}" value="{{ $permission->name }}" class="form-check-input">
                <label for="permission-{{ $permission->id }}" class="form-check-label">
                    {{ $permission->name }}
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
                            <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles</a></li>
                            <span>&nbsp;/&nbsp;</span>
                            <li class="breadcrumb-item active">Edit Role</li>
                        </ol>
                    </nav>
                    <h1 class="h3 m-0">Edit Role</h1>
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

                            <form action="{{ route('roles.update', $role->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label class="form-label" for="name">Role Name</label>
                                            <input type="text" class="form-control" id="name"
                                                placeholder="Enter Role Name" name="name"
                                                value="{{ old('name', $role->name) }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-4">
                                            <label class="form-label">Assign Permissions</label>
                                            <div class="row">
                                                @forelse($permissions as $permission)
                                                    <div class="col-sm-6 col-12 col-lg-3 mb-2">
                                                        <div class="form-check">
                                                            <input
                                                                {{ $hasPermissions->contains($permission->name) ? 'checked' : '' }}
                                                                type="checkbox" name="permission[]"
                                                                id="permission-{{ $permission->id }}"
                                                                value="{{ $permission->name }}" class="form-check-input">
                                                            <label for="permission-{{ $permission->id }}"
                                                                class="form-check-label">{{ $permission->name }}</label>
                                                        </div>
                                                    </div>
                                                @empty
                                                    <p class="text-muted">No permissions available.</p>
                                                @endforelse
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
