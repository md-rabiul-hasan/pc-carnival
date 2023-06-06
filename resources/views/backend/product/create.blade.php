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
@section('breadcrumb')
<div class="app-title">
   <div>
      <h1><i class="fa fa-bell-o"></i> Product Create</h1>
      <p>Application Product Setup</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Product Create</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Add New Product</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Title <span style="color:red;">**</span></label>
                  <input class="form-control" type="text" placeholder="Title" name="title" required>
               </div>
               <div class="form-group">
                  <label class="control-label">Select Brand <span style="color:red;">**</span></label>
                  <select class="form-control select2" name="brand_id" required>
                     <option value="">Select Brand</option>
                     @foreach($brands as $brand)
                     <option value="{{ $brand->id }}">{{ $brand->title }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                  <label class="control-label">Select Category <span style="color:red;">**</span></label>
                  <select class="form-control select2" name="category_id" id="category_id" required onchange="findSubCategory()">
                     <option value="">Select Category</option>
                     @foreach($categories as $category)
                     <option value="{{ $category->id }}">{{ $category->title }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                <label class="control-label">Select Sub-Category <span style="color:red;">**</span></label>
                <select class="form-control select2" name="sub_category_id" id="sub_category_id" required>
                   <option value="">select sub-category</option>
                   
                </select>
             </div>
               <div class="form-group">
                  <label class="control-label">Quantity <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" placeholder="1" name="quantity" required>
               </div>
               <div class="form-group">
                  <label class="control-label">Buying Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" placeholder="100.00" step="0.01" min="1" onkeyup="buyingPriceInWord()" id="buying_price" name="buying_price" required>
                  <span id="buying_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                  <label class="control-label">Selling Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" id="selling_price" placeholder="100.00" onkeyup="detectProductCurrentPrice(); sellingPriceInWord()" step="0.01" min="1" name="selling_price" required>
                  <span id="selling_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                  <label class="control-label">Discount Percentage <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" id="discount_percentage" onkeyup="detectProductCurrentPrice();" placeholder="5%" step="0.01" min="0" value="0" max="100" name="discount_percentage" required>
               </div>
               <div class="form-group">
                  <label class="control-label">Current Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" readonly id="current_price" name="current_price" required>
                  <span id="current_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                <label class="control-label">Image</label>
                <input class="form-control" type="file" multiple name="image[]">
             </div>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Product Description</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Key Feautes <span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor1"  rows="3" name="key_features"></textarea>
               </div>
               <div class="form-group">
                  <label class="control-label">Specifications <span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor2" rows="3" name="specifications"></textarea>
               </div>
               <div class="form-group">
                  <label class="control-label">Description <span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor3" rows="3" name="description"></textarea>
               </div>  
               <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="is_pc_build" type="checkbox"> PC build available this product ? 
                  </label>
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
<script type="text/javascript" src="{{ asset('backend/assets/js/amount_calculate.js')}}"></script>
<script>
   $('.select2').select2();
   function findSubCategory(){
      var category_id = $("#category_id").val();
      if(category_id){
         let token = $('meta[name="csrf-token"]').attr('content');
            loaderStart();
            $.ajax({
               url: '/admin/product/find-sub-category/' + category_id,
               method: 'GET',
               success: function(result){
                  loaderEnd();
                  $("#sub_category_id").empty().append(result)
               }
            });
      }
   }

   function buyingPriceInWord(){
      var buying_price = $("#buying_price").val();
      var inword = inWords(buying_price);
      $("#buying_price_in_word").html(inword);
   }

   function sellingPriceInWord(){
      $("#selling_price_in_word").html(inWords($("#selling_price").val()));
   }
</script>
@endpush