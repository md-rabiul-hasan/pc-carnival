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
      <h1><i class="fa fa-bell-o"></i> Home Page Adds Update</h1>
      <p>Home Page Adds Update</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Adds Update</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.home-page.adds.update', $add->id) }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-4">
         <div class="tile">
            <h3 class="tile-title">Update Adds</h3>
            <div class="tile-body">
               
               <div class="row">
                  <div class="form-group col-md-12">
                      <label class="control-label">Adds title <span style="color:red;">**</span></label>
                      <input class="form-control" type="text" placeholder="Title" name="adds_title" value="{{ $add->title }}" required>
                   </div>
                   <div class="form-group col-md-12">
                      <label class="control-label">Adds Image (370x124 px)</label>
                      <span>
                        <img src="{{ asset($add->banner) }}" onclick="imagePreviewModal('{{ asset($add->banner) }}')"  alt="" style="height: 24px; weight: 24px">
                     </span>
                      <input class="form-control" type="file" name="adds_image" required>
                   </div>
                   <div class="form-group col-md-12">
                      <label class="control-label">Link</label>
                      <input class="form-control" type="text" name="adds_link" value="{{ $add->link}}" required>
                   </div>
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
