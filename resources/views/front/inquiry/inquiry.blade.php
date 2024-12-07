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

<form action="{{ url('inquiry-submit') }}" name="contact-us-form" method="post" class="needs-validation" novalidate>
    @csrf

    <!-- Name Field -->
    <div class="form-floating my-4">
        <input type="text" id="contact-name" class="form-control" placeholder="Name" required name="name" value="{{ old('name') }}">
        <label for="contact-name">Your Name *</label>
    </div>

    <!-- Email Field -->
    <div class="form-floating my-4">
        <input type="email" id="contact-email" class="form-control" placeholder="Email" required name="email" value="{{ old('email') }}">
        <label for="contact-email">Your Email *</label>
    </div>

    <!-- Phone Field -->
    <div class="form-floating my-4">
        <input type="tel" id="contact-phone" class="form-control" placeholder="Phone" required name="phone" value="{{ old('phone') }}">
        <label for="contact-phone">Your Phone *</label>
    </div>

    <div class="form-floating my-4">
        <input type="tel" id="contact-address" class="form-control" placeholder="Address" required name="address" value="{{ old('address') }}">
        <label for="contact-address">Your Address *</label>
    </div>

    <!-- Message Field -->
    <div class="form-floating my-4">
        <textarea id="contact-message" class="form-control" placeholder="Message" required name="message">{{ old('message') }}</textarea>
        <label for="contact-message">Your Message *</label>
    </div>

   

    <!-- Submit Button -->
    <div class="">
        <button type="submit" class="btn btn-primary">Send Message</button>
    </div>


</form>

</div>
@endsection
