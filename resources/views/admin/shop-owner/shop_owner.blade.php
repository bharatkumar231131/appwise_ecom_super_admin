@extends('components.admin.layouts')
@section('content')
<div class="container">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col-12">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item active">Shop Owners</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h1 class="h3 m-0">Shop Owners</h1>
                </div>
                @if (Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                        <strong>Success:</strong> {{ Session::get('success_message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
            <div class="col-12">
                <a class="btn btn-secondary backbtn" href="{{ url()->previous() }}">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Search Bar -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="p-4">
                <input type="text" placeholder="Start typing to search for Shop Owners"
                    class="form-control form-control--search mx-auto" id="table-search" />
            </div>
        </div>
    </div>

    <!-- Shop Owners Table -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 0, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Shop Name</th>
                            <th>Domian</th>
                            <th>Package_id</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shopOwners as $shopOwner)
                            <tr>
                                <td>{{ $shopOwner->name }}</td>
                                <td>{{ $shopOwner->shop_name }}</td>
                                <td>{{ $shopOwner->domain }}</td>
                                <td>{{ $shopOwner->package->id ?? 'No Package' }}</td>
                                <td>
                                    @if ($shopOwner->status == 'active')
                                        <span class="badge bg-success">Active</span>
                                    @elseif ($shopOwner->status == 'inactive')
                                        <span class="badge bg-warning">Inactive</span>
                                    @else
                                        <span class="badge bg-danger">Suspended</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
