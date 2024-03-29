@extends('backend.layouts')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.css">
<style>
   .select2 {
      width: 100%!important;
   }
   .bootstrap-tagsinput {
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
      <h1><i class="fa fa-bell-o"></i> Product Modification</h1>
      <p>Application Product Modification</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Product Modification</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.product.update', [$product->id]) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
   <div class="row">
      @csrf
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Product Modification</h3>
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Title <span style="color:red;">**</span></label>
                  <input class="form-control" type="text" placeholder="Title" name="title" value="{{ $product->title }}" required>
               </div>
               <div class="form-group">
                  <label class="control-label">Product Image</label> 
                  <span>
                     <img src="{{ asset($product->image) }}" onclick="imagePreviewModal('{{ asset($product->image) }}')"  alt="" style="height: 24px; weight: 24px">
                  </span>
                  <input class="form-control" type="file" name="product_image">
               </div>
               <div class="form-group">
                  <label class="control-label">Select Brand <span style="color:red;">**</span></label>
                  <select class="form-control select2" name="brand_id" required>
                     <option value="">Select Brand</option>
                     @foreach($brands as $brand)
                     <option value="{{ $brand->id }}" @if($brand->id == $product->brand_id) {{ "selected" }} @endif >{{ $brand->title }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                  <label class="control-label">Select Category <span style="color:red;">**</span></label>
                  <select class="form-control select2" name="category_id" id="category_id" required onchange="findSubCategory()">
                     <option value="">Select Category</option>
                     @foreach($categories as $category)
                     <option value="{{ $category->id }}" @if($category->id == $product->category_id) {{ "selected" }} @endif>{{ $category->title }}</option>
                     @endforeach
                  </select>
               </div>
               <div class="form-group">
                <label class="control-label">Select Sub-Category <span style="color:red;">**</span></label>
                <select class="form-control select2" name="sub_category_id" id="sub_category_id" required>
                    <option value="">select sub-category</option>
                    @foreach($sub_categories as $sub_category)
                        <option value="{{ $sub_category->id }}" @if($sub_category->id == $product->sub_category_id) {{ "selected" }} @endif>{{ $sub_category->title }}</option>
                    @endforeach
                </select>
             </div>
             <div class="form-group">
               <label class="control-label">Availability <span style="color:red;">**</span></label>
               <select class="form-control select2" name="availability" id="availability" required>
                  <option value="">Select Availability</option>
                  <option value="in_stock" @if($product->availability == "in_stock") selected @endif>IN-STOCK</option>
                  <option value="out_of_stock" @if($product->availability == "out_of_stock") selected @endif>OUT-STOCK</option>
                  <option value="pre_order" @if($product->availability == "pre_order") selected @endif>PRE-ORDER</option>
               </select>
            </div>
               <div class="form-group">
                  <label class="control-label">Buying Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" placeholder="100.00" step="0.01" min="1" name="buying_price" id="buying_price" onkeyup="buyingPriceInWord()"  value="{{ $product->buying_price }}" required>
                  <span id="buying_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                  <label class="control-label">Selling Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" placeholder="100.00" step="0.01" min="1" id="selling_price" name="selling_price" onkeyup="detectProductCurrentPrice(); sellingPriceInWord()" value="{{ $product->selling_price }}" required>
                  <span id="selling_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                  <label class="control-label">Discount Percentage <span style="color:red;">**</span></label>
                  <input class="form-control" type="number"  onkeyup="detectProductCurrentPrice();" placeholder="5%" id="discount_percentage"  step="0.01" min="0" max="100" value="{{ $product->discount_percentage }}" name="discount_percentage" required>
               </div>
               <div class="form-group">
                  <label class="control-label">Current Price <span style="color:red;">**</span></label>
                  <input class="form-control" type="number" id="current_price" readonly value="{{ $product->current_price }}" name="current_price" required>
                  <span id="current_price_in_word" style="text-transform:capitalize; color:red; font-weight:bold"></span>
               </div>
               <div class="form-group">
                  <label class="control-label">Tags For Searching Faster</label><br>
                  <input class="form-control" type="text" value="{{ $product->tags }}"  name="tags" id="tagsInput" style="width: 100%!important">
               </div>
               <div class="form-group">
                  <label class="control-label">Gallery (Upload Multiple Image)</label>
                  <br>
                  @foreach($product->images as $image)
                     <img class="img-thumbnail" style="cursor: pointer" onclick="imagePreviewModal('{{ asset($image->image_path) }}')"  alt="200x200" width="30px" height="30px" src="{{ asset($image->image_path) }}" data-holder-rendered="true">
                  @endforeach
                  <input class="form-control mt-3" type="file" multiple name="image[]">
               </div>
            </div>
         </div>
         <div class="tile">
            <h3 class="tile-title">Add Related Products</h3>
            <div class="tile-body">
               <div id="related-products-container">
                  <div class="related-product">
                     <select class="form-control select2" name="related_products[]" multiple id="related_products">
                        <option value="">Search Product</option>
                        @foreach($relatedProducts as $relatedProduct)
                           <option value="{{ $relatedProduct->id }}" selected>{{ $relatedProduct->title }}</option>
                        @endforeach
                     </select>
                  </div>
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
                  <textarea class="form-control" id="editor1" rows="3" name="key_features">{{ $product->key_features }}</textarea>
               </div>
               <div class="form-group">
                  <label class="control-label">Specifications <span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor2" rows="3" name="specifications">{{ $product->specifications }}</textarea>
               </div>
               <div class="form-group">
                  <label class="control-label">Description <span style="color:red;">**</span></label>
                  <textarea class="form-control" id="editor3" rows="3" name="description">{{ $product->description }}</textarea>
               </div> 
               <div class="form-group">
                  <label class="control-label">Questions <span style="color:red;"></span></label>
                  <textarea class="form-control" id="editor4" rows="3" name="questions">{{ $product->questions }}</textarea>
               </div> 
               <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" name="is_pc_build" type="checkbox" @if ($product->is_pc_build == 1) checked @endif> PC build available this product ? 
                  </label>
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
<script type="text/javascript" src="{{ asset('backend/assets/js/amount_calculate.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js"></script>
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

   $(document).ready(function(){

      $("#related_products").select2({
         ajax: {
            url: "{{ route('admin.search.select2.product') }}",
            type: "post",
            dataType: 'json',
            delay: 250,
            data: function (params) {
               return {
                  searchTerm: params.term // search term
               };
            },
            headers: {
                  'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
               },
            processResults: function (response) {
               return {
                  results: response
               };
            },
            cache: true
         }
      });
   });

</script>
<script>
   $(document).ready(function() {
      $('#tagsInput').tagsinput({
         tagClass: 'badge badge-primary',
         trimValue: true
      });
   });
</script>
@endpush