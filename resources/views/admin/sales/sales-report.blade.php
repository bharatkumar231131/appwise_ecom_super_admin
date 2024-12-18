@extends('components.admin.layouts')

@section('content')
<div class="container">
    <div class="py-5">
        <div class="row g-4 align-items-center">
            <div class="col-12">
                <nav class="mb-2" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-sa-simple">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                        <span>&nbsp;/&nbsp;</span>
                        <li class="breadcrumb-item active">Sales Report</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h1 class="h3 m-0">Sales Report</h1>
                    @can('create owner')
                    <a href="" class="btn btn-primary">Export</a>
                    @endcan
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

    <!-- Filter Section -->
    <!-- <div class="row g-4 align-items-center">
        <div class="col-lg-4">
            <div class="d-flex">
                <input type="date" class="form-control" id="start-date" placeholder="Start Date">
                <span class="mx-2"></span>
                <input type="date" class="form-control" id="end-date" placeholder="End Date">
            </div>
        </div>
        <div class="col-lg-2">
            <select class="form-select" id="order-status" aria-label="Order Status Filter">
                <option selected>Choose Order Status</option>
                <option value="new">New</option>
                <option value="pending">Pending</option>
                <option value="cancelled">Cancelled</option>
                <option value="shipped">Shipped</option>
                <option value="delivered">Delivered</option>
            </select>
        </div>

        <div class="col-lg-2">
            <button class="btn btn-info" id="filter-btn">Apply Filters</button>
        </div>
    </div> -->

    <div class="p-4">
        <form action="{{ route('admin.sales_report') }}" method="post" class="row g-3">
            @csrf
            <div class="col-md-4">
                <input type="date" name="start_date" class="form-control" placeholder="Start Date"
                    value="{{ request('start_date') }}">
            </div>
            <div class="col-md-4">
                <input type="date" name="end_date" class="form-control" placeholder="End Date"
                    value="{{ request('end_date') }}">
            </div>
            <div class="col-md-3">
                <select name="status" class="form-select" aria-label="Order Status">
                    <option value="" selected>Choose Order Status</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="canceled" {{ request('status') == 'canceled' ? 'selected' : '' }}>Canceled</option>
                    <option value="shipped" {{ request('status') == 'shipped' ? 'selected' : '' }}>Shipped</option>
                    <option value="delivered" {{ request('status') == 'delivered' ? 'selected' : '' }}>Delivered</option>
                </select>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </form>
    </div>


    <!-- Sales Table -->
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for Shop Owners"
                        class="form-control form-control--search mx-auto" id="table-search" />
                </div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 0, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th>Order Id</th>
                            <th>Order Date</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Order Amount</th>
                            <th>Order Status</th>
                            <th>Payment Method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($salesData as $sale)
                        <tr>
                            <td>{{ $sale['id'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($sale['created_at'])->format('d-m-Y') }}</td>
                            <td>{{ $sale['name'] }}</td>
                            <td>{{ $sale['email'] }}</td>
                            <td>{{ $sale['grand_total'] }}</td>
                            <td>{{ $sale['order_status'] }}</td>
                            <td>{{ $sale['payment_method'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
</div>

@endsection