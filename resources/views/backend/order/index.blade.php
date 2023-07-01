@extends('backend.layouts')
@section('title')
Orders
@endsection

@push('css')
  <style>
  input#searchProduct {
    padding: 9px 58px;
    position: absolute;
    right: 1%;
  }
  </style>
@endpush

@section('breadcrumb')
<div class="app-title">
    <div>
      <h1><i class="fa fa-bell-o"></i> Orders</h1>
      <p>Order List</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Orders List</a></li>
    </ul>
  </div>
@endsection

@section('content')

<input type="search" name="search" id="searchProduct" value="">
<br><br><br>

<div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>SL</th>
                  <th>Order Number</th>
                  <th>Name</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order )
                  <tr>
                    <td>{{ $sl++ }}</td>
                    <td>{{ $order->order_number }}</td>
                    <td>{{ $order->customer->first_name }} {{ $order->customer->last_name }} </td>
                    <td>{{ $order->customer->phone }}</td>
                    <td>
                        @if($order->status == 0)
                            Order Pending
                        @elseif($order->status == 1)
                            Order Shipped
                        @elseif($order->status == 2)
                            Order Delivered
                        @elseif($order->status == 3)
                            Order Canceled
                        @endif
                    </td>
                    <td>{{ number_format($order->total_bill,0) }}</td>
                    <td>
                      <a href="{{ route('admin.order.details', $order->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
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
{{ $orders->links() }}
      </div>
      
    </div>
  </div>
@endsection

@push('js')
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