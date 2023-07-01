@extends('backend.layouts')
@section('title')
Home Page Setup
@endsection

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Home Page</h1>
      <p>Frontend Home Page Product Setup</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Home Page Product Setup</a></li>
    </ul>
  </div>
@endsection

@section('content')
@if(count($home_page_products) == 0)
  <a href="{{ route('admin.home-page-product.create')}}" class="btn btn-primary mb-3"> <i class="fa fa-plus"></i> Add New</a>
@else
<a href="{{ route('admin.home-page-product.edit')}}" class="btn btn-primary mb-3"> <i class="fa fa-pencil"></i> Update</a>
@endif
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
                  <th>Status</th>
                  <th>Code</th>
                  <th>Availability</th>
                  <th>Buying Price</th>
                  <th>Current Price</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($home_page_products as $home_page_products )
                    <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $home_page_products->product->title }}</td>
                    <td>{{ $home_page_products->status === "BEST" ? "BEST SELLER" : $home_page_products->status }} PRODUCT</td>
                    <td>{{ $home_page_products->product->product_code }}</td>
                    <td>{{ str_replace("_", " ", strtoupper($home_page_products->product->availability) ) }}</td>
                    <td>{{ $home_page_products->product->buying_price }}</td>
                    <td>{{ $home_page_products->product->current_price }}</td>
                    </tr>
             
              @endforeach

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

