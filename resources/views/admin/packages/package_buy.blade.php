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
                        <li class="breadcrumb-item active">Packages Buy</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h1 class="h3 m-0">Packages Buy</h1>
                </div>
                @if (Session::has('success_message'))
                <!-- Check AdminController.php, updateAdminPassword() method -->
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Success:</strong> {{ Session::get('success_message') }}
                    <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>
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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for Brands"
                        class="form-control form-control--search mx-auto" id="table-search" />
                </div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 0, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Shop-Owner Name</th>
                            <th>Package Name</th>
                            <th>Number Of Section</th>
                            <th>Number Of Category</th>
                            <th>Number Of Product</th>
                            <th>Price</th>
                            <th>Days</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packageBuy as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>
                                <a href="{{url('admin/shop-owners-details/' . $package->shopowner->id)}}">
                                    {{ $package->shopowner->name }}
                                </a>
                            </td>

                            <td>{{ $package->package_name }}</td>
                            <td>{{ $package->number_of_section }}</td>
                            <td>{{ $package->number_of_category }}</td>
                            <td>{{ $package->number_of_product }}</td>
                            <td>{{ $package->price }}</td>
                            <td>{{ $package->days }}</td>
                            <td>
                                @if($package->status == 'active')
                                <span class="badge bg-success">Active</span>
                                @elseif($package->status == 'inactive')
                                <span class="badge bg-danger">Inactive</span>
                                @else
                                <span class="badge bg-secondary">N/A</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex gap-3">
                                    <a href="{{ url('admin/edit_package_buy/' . $package->id) }}" class="actionbtn-tb actionbtn-edit"
                                        data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit"><i
                                            class="far fa-edit text-white"></i></a>
                                    <a href="#" data-url="{{ route('admin.delete', ['type' => 'package_buy', 'id' => $package->id]) }}"
                                        class="actionbtn-tb actionbtn-remove delete-btn" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="Delete">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
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