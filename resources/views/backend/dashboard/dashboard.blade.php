@extends('backend.layouts')

@section('content')
<div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      <p>PC Carnival Admin Dashboard</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon fa fa-product-hunt fa-3x"></i>
        <div class="info">
          <h4>Total Product</h4>
          <p><b>{{ $total_product }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
        <div class="info">
          <h4>Total Order</h4>
          <p><b>{{ $total_order }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon fa fa-spinner fa-3x"></i>
        <div class="info">
          <h4>Pending Order</h4>
          <p><b>{{ $pending_order }}</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon fa fa-usd fa-3x"></i>
        <div class="info">
          <h4>Pending Order Amount</h4>
          <p><b>{{ number_format($total_order_amount,2) }}</b></p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Polar Chart</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="polarChartDemo"></canvas>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
      <!-- Page specific javascripts-->
      <script type="text/javascript" src="{{ asset('backend/assets/js/plugins/chart.js')}}"></script>


<script>
    $(document).ready(function() {
      $.ajax({
        url: "{{ route('admin.order.chart') }}",
        type: "GET",
        dataType: 'json',
        success: function(response) {
          console.log(response);
          var ctxpo = $("#polarChartDemo").get(0).getContext("2d");
        var polarChart = new Chart(ctxpo).PolarArea(response);
        },
        error: function(xhr, status, error) {
          console.error("AJAX request failed:", status, error);
        }
      });
    });
  </script>
@endpush