@extends('components.admin.layouts')
@section('content')
<div class="container">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard')}}">Dashboard</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item active">Shop Owner</li>
                    </ol>
                </nav>
                <div class=" d-flex justify-content-between align-items-center">
                    <h1 class="h3 m-0">Shop Owner Details</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-lg-8">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="mb-5">
                        <h2 class="mb-0 fs-exact-18">Owner Details</h2>
                    </div>

                    <div class="list-unstyled row">
                        <dt class="list-unstyled m-0 col-sm-3">Name: </dt>
                        <dd class="fs-exact-13 text-muted mb-0 mt-1 col-sm-9">
                            {{ $shopOwnerDetails->name ?? 'N/A' }}
                        </dd>
                    </div>
                    <!-- Check updateAdminPassword() method in AdminController.php -->
                    <div class="list-unstyled row">
                        <dt class="list-unstyled m-0 col-sm-3">Shop-Name: </dt>
                        <dd class="fs-exact-13 text-muted mb-0 mt-1 col-sm-9">
                            {{ $shopOwnerDetails->shop_name ?? 'N/A' }}
                        </dd>
                    </div>

                    <div class="list-unstyled row">
                        <dt class="list-unstyled m-0 col-sm-3">Domain: </dt>
                        <dd class="fs-exact-13 text-muted mb-0 mt-1 col-sm-9">
                            {{ $shopOwnerDetails->domain ?? 'N/A' }}
                        </dd>
                    </div>

                    <div class="list-unstyled row">
                        <dt class="list-unstyled m-0 col-sm-3">Package Name: </dt>
                        <dd class="fs-exact-13 text-muted mb-0 mt-1 col-sm-9">
                            {{ $shopOwnerDetails->package->name ?? 'N/A' }}
                        </dd>
                    </div>

                    <div class="list-unstyled row">
                        <dt class="list-unstyled m-0 col-sm-3">Status: </dt>
                        <dd class="fs-exact-13 text-muted mb-0 mt-1 col-sm-9">
                            {{ $shopOwnerDetails->status ?? 'N/A' }}
                        </dd>
                    </div>

                   

                </div>
            </div>
        </div>
    </div>
</div>


@endsection