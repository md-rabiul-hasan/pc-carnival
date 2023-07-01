@extends('backend.layouts')
@push('css')
<style>
   .select2 {
      width: 100%!important;
   }
</style>
@endpush
@section('title')
Home Page Product Setup
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
      <h1><i class="fa fa-bell-o"></i> Home Page Product Setup</h1>
      <p>Home Page Product Setup For Faster Response</p>
   </div>
   <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Product Setup</a></li>
   </ul>
</div>
@endsection
@section('content')
<form action="{{ route('admin.home-page-product.update') }}" method="POST" enctype="multipart/form-data">
   <div class="row">
      @csrf
      <div class="col-md-12">
         <div class="tile">
            <h3 class="tile-title">Add 5 Latest Product</h3>
            <div class="tile-body">
               <div id="related-products-container">
                  <div class="related-product">
                     <select class="form-control select2" name="latest_products[]" multiple id="latest_products" required>
                        <option value="">Search Product</option>
                        @foreach($latest_products as $latest_product)
                           <option value="{{ $latest_product->product->id }}" selected>{{ $latest_product->product->title }}</option>
                        @endforeach
                     </select>
                  </div>
               </div>               
            </div>
         </div>
      </div> 
      <div class="col-md-12">
        <div class="tile">
           <h3 class="tile-title">Add 5 Popular Product</h3>
           <div class="tile-body">
              <div id="related-products-container">
                 <div class="related-product">
                    <select class="form-control select2" name="popular_products[]" multiple id="popular_products" required>
                       <option value="">Search Product</option>
                       @foreach($popular_products as $popular_product)
                           <option value="{{ $popular_product->product->id }}" selected>{{ $popular_product->product->title }}</option>
                        @endforeach
                    </select>
                 </div>
              </div>               
           </div>
        </div>
     </div>
     <div class="col-md-12">
        <div class="tile">
           <h3 class="tile-title">Add 5 Best Seller Product</h3>
           <div class="tile-body">
              <div id="related-products-container">
                 <div class="related-product">
                    <select class="form-control select2" name="best_seller_products[]" multiple id="best_seller_products" required>
                       <option value="">Search Product</option>
                       @foreach($best_seller_products as $best_seller_product)
                           <option value="{{ $best_seller_product->product->id }}" selected>{{ $best_seller_product->product->title }}</option>
                        @endforeach
                    </select>
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
@push('js')
<script type="text/javascript" src="{{ asset('backend/assets/js/plugins/select2.min.js')}}"></script>
<script>
   // Initialize Select2 plugin
   $('.select2').select2();

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

        $("#latest_products").select2({
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

        $("#popular_products").select2({
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

        

        
        $("#best_seller_products").select2({
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
@endpush