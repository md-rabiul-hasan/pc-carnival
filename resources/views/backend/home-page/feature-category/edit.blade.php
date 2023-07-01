@extends('backend.layouts')
@push('css')
<style>
   .select2 {
      width: 100%!important;
   }
</style>
@endpush
@section('title')
Feature-Category Edit
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
      <h1><i class="fa fa-bell-o"></i> Home Page Feature Category</h1>
      <p>Home Page Feature Category</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Feature Category Update</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.home-page.feature-category.update', $featureCategory->id) }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Modify Feature Category</h3>
            <div class="tile-body">
                <div class="form-group">
                    <label class="control-label">Title <span style="color:red;">**</span></label>
                    <input class="form-control" type="text" placeholder="Title" value="{{ $featureCategory->title }}" name="title" required>
                 </div>
                 <div class="form-group">
                     <label class="control-label">Image</label> 
                     <span>
                        <img src="{{ asset($featureCategory->image) }}" onclick="imagePreviewModal('{{ asset($featureCategory->image) }}')"  alt="" style="height: 24px; weight: 24px">
                     </span>
                     <input class="form-control" type="file" name="image">
                  </div>
                 <div class="form-group">
                    <label class="control-label">Select Type <span style="color:red;">**</span></label>
                    <select class="form-control select2" name="type" id="typeSelect" required>
                       <option value="">Select Type</option>
                       <option value="brand" @if($featureCategory->type === "brand") {{ "selected" }} @endif>Brand</option>
                       <option value="category" @if($featureCategory->type === "category") {{ "selected" }} @endif >Category</option>
                       <option value="sub-category" @if($featureCategory->type === "sub-category") {{ "selected" }} @endif>Sub-Category</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label class="control-label">Select Link<span style="color:red;">**</span></label>
                    <select class="form-control select2" name="link" id="linkSelect" required>
                       <option value="{{ $featureCategory->link }}" selected>{{ $featureCategory->link }}</option>

                    </select>
                 </div>
               
            
            </div>
         </div>
      </div>    
   </div>
   <div class="tile-footer">            
      <button class="btn btn-danger" type="reset"><i class="fa fa-fw fa-lg fa-times-circle"></i>Reset</button>
      &nbsp;&nbsp;&nbsp;
      <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update</button>
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