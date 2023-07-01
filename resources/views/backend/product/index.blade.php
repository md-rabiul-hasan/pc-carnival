@extends('backend.layouts')
@section('title')
Product
@endsection

@push('css')
  <style>
  input#searchProduct {
    padding: 9px 58px;
    position: absolute;
    right: 1%;
  }
  span.relative.z-0.inline-flex.shadow-sm.rounded-md {
    display: none;
  }
  .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
      margin-top: 10px;
  }
  </style>
@endpush

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Product</h1>
      <p>Application Product Parameter Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Product Setup</a></li>
    </ul>
  </div>
@endsection

@section('content')

<a href="{{ route('admin.product.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>
<input type="search" name="search" id="searchProduct" value="">

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Title</th>
                  <th>Code</th>
                  <th>Availability</th>
                  <th>Buying Price</th>
                  <th>Current Price</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product )
                  <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ str_replace("_", " ", strtoupper($product->availability) ) }}</td>
                    <td>{{ $product->buying_price }}</td>
                    <td>{{ $product->current_price }}</td>
                    <td>
                      <a href="{{ route('admin.product.edit', [$product->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i></a>
                      <a href="{{ route('admin.product.show', [$product->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                      <button onclick="deleteProduct({{ $product->id }})" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </td>
                  </tr>
               
                @endforeach

              </tbody>
            </table>

            

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div>
<!-- Render the pagination links -->
{{ $products->links() }}
      </div>
      
    </div>
  </div>
@endsection

@push('js')
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script>
      function deleteProduct(id){
        cuteAlert({
            type: "question",
            title: "Are you sure? You want to delete this product?",
            message: "",
            confirmText: "Yes",
            cancelText: "Cancel"
          }).then((e)=>{        
            if ( e == ("confirm")){
                let token = $('meta[name="csrf-token"]').attr('content');
                loaderStart();
                $.ajax({
                    url: '/admin/product/' + id,
                    method: 'DELETE',
                    data:{
                        _token: token
                    },
                    success: function(result){
                        loaderEnd();
                        if(result.success === true){
                            cuteSuccess("Product delete successfully", "{{ route('admin.product.index') }}" )
                        }
                    }
                });
            }
        })        
      }
    </script>

<script>
  $(document).ready(function() {
     $('#searchProduct').on('keypress', function(event) {
        if (event.keyCode === 13) { // Enter key
           event.preventDefault();
           var searchTerm = $(this).val().trim();
           if (searchTerm !== '') {
              updateURLAndReload(searchTerm);
           }
        }
     });

     function updateURLAndReload(searchTerm) {
        let currentURL = window.location.href;
        let updatedURL = new URL(currentURL);
        updatedURL.searchParams.set('search', searchTerm);
        let newURL = updatedURL.toString();
        
        window.location.href = newURL;
     }
  });
</script>


@endpush