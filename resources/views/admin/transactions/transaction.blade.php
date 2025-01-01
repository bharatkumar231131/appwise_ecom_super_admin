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
                        <li class="breadcrumb-item active">Transaction</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h1 class="h3 m-0">Transaction Report</h1>
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



    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="p-4">
                    <input type="text" placeholder="Start typing to search for Shop Owners"
                        class="form-control form-control--search mx-auto" id="table-search" />
                </div>
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 0, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead class="sticky-header">
                        <tr>
                            <th>ID</th>
                            <th>Onwer Name</th>
                            <th>Transaction Id</th>
                            <th>Package Name</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->id}}</td>
                            <td><?php $owner = App\Models\ShopOwner::find($transaction->owner_id);?>{{$owner->name ?? "N/A"}}</td>
                            <td>{{$transaction->transaction_id}}</td>
                            <td>{{ $transaction->package_name }}</td>
                            <td>{{$transaction->amount}}</td>
                            <td>{{$transaction->payment_method}}</td>
                            <td>
                                <div class="d-flex gap-3">

                                    <a href="#" data-url="{{ route('admin.delete', ['type' => 'transaction', 'id' => $transaction->id]) }}"
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