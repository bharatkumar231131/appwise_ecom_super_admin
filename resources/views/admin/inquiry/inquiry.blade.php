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
                        <li class="breadcrumb-item active">Inquiries</li>
                    </ol>
                </nav>
                <div class="d-flex justify-content-between">
                    <h1 class="h3 m-0">Inquiries</h1>
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
                <input type="text" placeholder="Start typing to search for Inquiries"
                    class="form-control form-control--search mx-auto" id="table-search" />
            </div>
        </div>
    </div>

    <!-- Inquiries Table -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="sa-divider"></div>
                <table class="sa-datatables-init" data-order="[[ 0, &quot;desc&quot; ]]" data-sa-search-input="#table-search">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($inquiries as $inquiry)
                            <tr>
                                <td>{{ $inquiry->name }}</td>
                                <td>{{ $inquiry->email }}</td>
                                <td>{{ $inquiry->phone }}</td>
                                <td>{{ $inquiry->message }}</td>
                                <td>
                                    @if ($inquiry->status == 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif ($inquiry->status == 'resolved')
                                        <span class="badge bg-success">Resolved</span>
                                    @else
                                        <span class="badge bg-danger">Closed</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex gap-3">
                                        <a href="{{ url('admin/edit-inquiry/' . $inquiry->id) }}" class="actionbtn-tb actionbtn-edit"
                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Edit">
                                            <i class="far fa-view text-white"></i>
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