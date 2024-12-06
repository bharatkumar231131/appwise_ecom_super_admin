@extends('components.admin.layouts')

@section('content')
<div class="container">
    <div class="py-5">
        <h1 class="h3 mb-3">Upload Admin and Front Logos</h1>

        @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Success:</strong> {{ Session::get('success_message') }}
            <button type="button" class="sa-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{ url('admin/logo') }}" method="POST" enctype="multipart/form-data">
            @csrf
<div class="row">
                <div class="col-6 position-relative">
                    <label for="admin_logo" class="form-label">Admin Logo (200px x 200px)</label>
                    <input type="file" class="form-control position-absolute" id="admin_logo" name="admin_logo"
                        style="opacity: 0; cursor: pointer; height: 200px; width: 200px; top: 0; left: 0;"
                        onchange="previewImage(event, 'admin_preview')">
                    <img id="admin_preview"
                        src="{{ !empty($settings->admin_logo) ? asset('public/admin/images/logo/' . $settings->admin_logo) : '' }}"
                        alt="Admin Logo Preview"
                        style="width: 200px; height: 200px; margin-top: 10px; display: {{ !empty($settings->admin_logo) ? 'block' : 'none' }};">
                </div>

                <div class="col-6 position-relative">
                    <label for="front_logo" class="form-label">Front Logo (200px x 200px)</label>
                    <input type="file" class="form-control position-absolute" id="front_logo" name="front_logo"
                        style="opacity: 0; cursor: pointer; height: 200px; width: 200px; top: 0; left: 0;"
                        onchange="previewImage(event, 'front_preview')">
                    <img id="front_preview"
                        src="{{ !empty($settings->front_logo) ? asset('public/admin/images/logo/' . $settings->front_logo) : '' }}"
                        alt="Front Logo Preview"
                        style="width: 200px; height: 200px; margin-top: 10px; display: {{ !empty($settings->front_logo) ? 'block' : 'none' }};">
            </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function previewImage(event, previewId) {
        const preview = document.getElementById(previewId);
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.style.display = 'block'; // Show the image preview
            }
            reader.readAsDataURL(file);
        } else {
            preview.style.display = 'none'; // Hide the image preview if no file is selected
        }
    }
</script>
@endsection
