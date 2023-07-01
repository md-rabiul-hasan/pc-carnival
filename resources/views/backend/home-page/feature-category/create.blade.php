@extends('backend.layouts')
@push('css')
<style>
   .select2 {
      width: 100%!important;
   }
</style>
@endpush
@section('title')
Product
@endsection
@push('css')
   <style>
      .add-more-field {
         display: flex;
         justify-content: space-between;
      }
   </style>
@endpush
@section('breadcrumb')
<div class="app-title">
   <div>
      <h1><i class="fa fa-bell-o"></i> Home Page Adds Create</h1>
      <p>Home Page Adds Create</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Adds Create</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.home-page.feature-category.store') }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Add New Feature Category</h3>
            <div class="tile-body">
                <div class="form-group">
                    <label class="control-label">Title <span style="color:red;">**</span></label>
                    <input class="form-control" type="text" placeholder="Title" name="title" required>
                 </div>
                 <div class="form-group">
                    <label class="control-label">Image</label>
                    <input class="form-control" type="file" name="image" required>
                 </div>
                 <div class="form-group">
                    <label class="control-label">Select Type <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="type" id="typeSelect" required>
                       <option value="">Select Type</option>
                       <option value="brand">Brand</option>
                       <option value="category">Category</option>
                       <option value="sub-category">Sub-Category</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label class="control-label">Select Link<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="link" id="linkSelect" required>
                       <option value="">Select Link</option>
                    </select>
                 </div>
               
            
            </div>
         </div>
      </div>    
   </div>
   <div class="tile-footer">            
      <button class="btn btn-danger" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
      &nbsp;&nbsp;&nbsp;
      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Save</button>
   </div>
</form>
@endsection


@push('js')
<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/select2.min.js')}}"></script>
<script>
   // Initialize Select2 plugin
   $('.select2').select2();
</script>
<script>
    $(document).ready(function() {
       $('#typeSelect').change(function() {
          var type = $(this).val(); // Get the selected value
    
          // Retrieve the CSRF token value
          var csrfToken = $('meta[name="csrf-token"]').attr('content');

          // Send an AJAX request with CSRF token included in headers
          $.ajax({
             url: "{{ route('admin.home-page.feature-category.find-list') }}",
             method: 'POST',
             headers: {
                'X-CSRF-TOKEN': csrfToken
             },
             data: {type: type},
             dataType: 'json',
             success: function(response) {
                // Clear previous options
                $('#linkSelect').empty();
                $('#linkSelect').append($('<option>', {
                      value: "",
                      text: "Select Link"
                   }));
    
                // Add the fetched data to the "Select Link" dropdown
                $.each(response.data, function(index, item) {
                   $('#linkSelect').append($('<option>', {
                      value: item.slug,
                      text: item.title
                   }));
                });
             },
             error: function(xhr, status, error) {
                console.log(error); // Handle the error gracefully
             }
          });
       });
    });
</script>

@endpush