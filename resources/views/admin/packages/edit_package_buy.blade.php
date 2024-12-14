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
                        <li class="breadcrumb-item"><a href="#">User Package</a>
                        </li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item active">Edit User Package</li>
                    </ol>
                </nav>
                <h1 class="h3 m-0">Edit User Package</h1>
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

                        <form action="{{ url('admin/test-package-upgrade') }}" method="post">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $package['id'] }}">
                                <input type="hidden" name="owner_id" value="{{ $package['shop_owner_id'] }}">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name">Package Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Enter Package Name" name="name"
                                            value="{{ $package['package_name'] }}" required>
                                        @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="number_of_section">Number Of Section</label>
                                        <input type="number" class="form-control" id="number_of_section"
                                            placeholder="Enter Number Of Section" name="number_of_section"
                                            value="{{ $package['number_of_section'] }}" required>
                                        @error('number_of_section')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="number_of_category">Number Of Category</label>
                                        <input type="number" class="form-control" id="number_of_category"
                                            placeholder="Enter Number Of Category" name="number_of_category"
                                            value="{{ $package['number_of_category'] }}" required>
                                        @error('number_of_category')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="number_of_product">Number Of Product</label>
                                        <input type="number" class="form-control" id="number_of_product"
                                            placeholder="Enter Number Of Product" name="number_of_product"
                                            value="{{ $package['number_of_product'] }}" required>
                                        @error('number_of_product')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="price">Price</label>
                                        <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price"
                                            value="{{ $package['price'] }}" required>
                                        @error('price')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="days">Days</label>
                                        <input type="number" class="form-control" id="days" placeholder="Enter Days" name="days"
                                            value="{{ $package['days'] }}" required>
                                        @error('days')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection