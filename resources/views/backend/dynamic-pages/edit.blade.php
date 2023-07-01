@extends('backend.layouts')
@push('css')
<style>
   .select2 {
      width: 100%!important;
   }
</style>
@endpush
@section('title')
Update Dynamic Page
@endsection
@push('css')
  <!-- CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css">

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
      <h1><i class="fa fa-bell-o"></i> Dynamic Page</h1>
      <p>Update Dynamic Page Setup</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dynamic Page</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.dynamic-page.update') }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">About Us Page</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">About Us<span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor1"  rows="3" name="about_us">{{ $dynamicPages['about_us'] ?? '' }}</textarea>
               </div>            
            </div>
         </div>
      </div> 
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Privacy Policy Page</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Privacy Policy<span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor2"  rows="3" name="privacy_policy">{{ $dynamicPages['privacy_policy'] ?? '' }}</textarea>
               </div>            
            </div>
         </div>
      </div>  
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Terms and Condition</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Terms and Condition<span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor3"  rows="3" name="terms_and_condition">{{ $dynamicPages['terms_and_condition'] ?? '' }}</textarea>
               </div>            
            </div>
         </div>
      </div> 
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Delivery Option</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Delivery Option<span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor4"  rows="3" name="delivery_option">{{ $dynamicPages['delivery_option'] ?? '' }}</textarea>
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

