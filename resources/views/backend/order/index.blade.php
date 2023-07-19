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
  select#order_status {
    width: 15%;
  }
  span.relative.z-0.inline-flex.shadow-sm.rounded-md {
    display: none;
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
<div class="row">
  <select class="form-control select2" name="order_status" id="order_status" required>
    <option value="">Select Order Status</option>
    <option value="0" @if(request()->query('order_status') == "0") {{ "selected" }} @endif>Order Pending</option>
    <option value="1" @if(request()->query('order_status') == "1") {{ "selected" }} @endif>Order Shipped</option>
    <option value="2" @if(request()->query('order_status') == "2") {{ "selected" }} @endif>Order Delivered</option>
    <option value="3" @if(request()->query('order_status') == "3") {{ "selected" }} @endif>Order Cancelled</option>
  </select>

  <input type="search" name="search" id="searchProduct" value="{{ request()->query('search') }}">
</div>

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
        {{ $orders->appends(request()->except('page'))->links() }}
      </div>
    </div>
    
  </div>
@endsection

@push('js')
<script>
  $(document).ready(function() {
    // Event listener for order_status select dropdown change
    $('#order_status').on('change', function(event) {
      event.preventDefault();
      let selectedStatus = $(this).val().trim();
      updateURLAndReload(selectedStatus, $('#searchProduct').val().trim());
    });

    // Event listener for searchProduct input field
    $('#searchProduct').on('keypress', function(event) {
      if (event.keyCode === 13) { // Enter key
        event.preventDefault();
        var searchTerm = $(this).val().trim();
        updateURLAndReload($('#order_status').val().trim(), searchTerm);
        
      }
    });

    function updateURLAndReload(orderStatus, searchTerm) {
      let currentURL = window.location.href;
      let updatedURL = new URL(currentURL);
      updatedURL.searchParams.set('order_status', orderStatus);
      updatedURL.searchParams.set('search', searchTerm);
      let newURL = updatedURL.toString();

      window.location.href = newURL;
    }
  });
</script>


@endpush