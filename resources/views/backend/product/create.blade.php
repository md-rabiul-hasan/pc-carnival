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
                  <label class="control-label">Product Image</label>
                  <input class="form-control" type="file" name="product_image" required>
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
                  <label class="control-label">Availability <span style="color:red;">**</span></label>
                  <select class="form-control select2" name="availability" id="availability" required>
                     <option value="">Select Availability</option>
                     <option value="in_stock">IN-STOCK</option>
                     <option value="out_of_stock">OUT-STOCK</option>
                     <option value="pre_order">PRE-ORDER</option>
                  </select>
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
                <label class="control-label">Gallery (Upload Multiple Image)</label>
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
      <div class="col-md-6">
         <div class="tile">
            <h3 class="tile-title">Add Related Products <span><button type="button" class="btn btn-sm btn-primary" style="float: right;" id="add-product"><i class="fa fa-plus" aria-hidden="true"></i> Add Product</button></span></h3>
            <div class="tile-body">
               <div id="related-products-container">
                  <div class="related-product add-more-field">
                     <select class="form-control select2" name="related_products" multiple id="related_products" required>
                        <option value="">Search Product</option>
                     </select>
                     <button type="button" class="btn btn-sm btn-danger remove-product"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </div>
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
   // Initialize Select2 plugin
   $('.select2').select2();

   // Function to find sub-category based on selected category
   function findSubCategory() {
      var category_id = $("#category_id").val();
      if (category_id) {
         let token = $('meta[name="csrf-token"]').attr('content');
         loaderStart();
         $.ajax({
            url: '/admin/product/find-sub-category/' + category_id,
            method: 'GET',
            success: function(result) {
               loaderEnd();
               $("#sub_category_id").empty().append(result);
            }
         });
      }
   }

   // Function to convert buying price to words
   function buyingPriceInWord() {
      var buying_price = $("#buying_price").val();
      var inword = inWords(buying_price);
      $("#buying_price_in_word").html(inword);
   }

   // Function to convert selling price to words
   function sellingPriceInWord() {
      $("#selling_price_in_word").html(inWords($("#selling_price").val()));
   }



function appendSelect2Value(products) {
   console.log('products', products);
   var selectElement = $('#related_products');

   selectElement.select2({
      minimumResultsForSearch: -1 // Hide the search input
   });



   // Parse the input array value
   var inputArray = products;
   console.log("inputArray", inputArray);

   // Append options using the input array
   inputArray.forEach(function(item) {
      var option = new Option(item.title, item.id);
      selectElement.append(option);
      selectElement.trigger('change');
   });
}

$(document).ready(function(){

$("#related_products").select2({
   ajax: {
     url: "http://127.0.0.1:8000/admin/product/search-related-product",
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



// $(document).ready(function() {
//     var selectElement = $('#related_products');

//     selectElement.select2({
//         // Select2 configuration options
//         data: [] // Initialize with an empty data array
//     });

//     // Get Select2 input element
//     var selectInput = selectElement.next('.select2-container').find('.select2-search__field');

//     // Attach keyup event listener
//     function attachKeyupListener() {
//         selectInput.on('keyup', function() {
//             var typedData = $(this).val();
//             if (typedData !== "") {
//                 $.ajax({
//                     url: '/admin/product/search-related-product',
//                     method: 'POST',
//                     data: {
//                         searchText: typedData
//                     },
//                     headers: {
//                         'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//                     },
//                     cache: false // Disable caching
//                 })
//                 .then(function(response) {
//                     appendSelect2Value(response);
//                 })
//                 .catch(function(error) {
//                     console.log(error);
//                 });
//             }
//         });
//     }

//     // Event listener for initial keyup event
//     selectInput.on('keyup', function() {
//         var typedData = $(this).val();
//         if (typedData !== "") {
//             $.ajax({
//                 url: '/admin/product/search-related-product',
//                 method: 'POST',
//                 data: {
//                     searchText: typedData
//                 },
//                 headers: {
//                     'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
//                 },
//                 cache: false // Disable caching
//             })
//             .then(function(response) {
//                 selectElement.select2('destroy'); // Destroy the Select2 instance
//                 appendSelect2Value(response);
//                 selectElement.select2(); // Reinitialize the Select2 instance
//                 // Reattach keyup event listener after reinitializing Select2
//                 selectInput.off('keyup');
//                 attachKeyupListener();
//             })
//             .catch(function(error) {
//                 console.log(error);
//             });
//         }
//     });
// });






</script>
@endpush