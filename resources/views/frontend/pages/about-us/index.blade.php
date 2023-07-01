@extends('frontend.layouts')
@section('page-title', 'about-us')

@push('css')
	<style>
		table {
		border-collapse: collapse;
		width: 100%;
		}
		
		table td, table th {
		border: 1px solid black;
		padding: 8px;
		text-align: left;
		}
		
		table th {
		background-color: #f2f2f2;
		}
  	</style>
@endpush

@section('frontend-content')
		<!-- Product Details Section Start -->
		<div class="product-banner-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Home</a></li>
							<li class="active"><a href="#">About Us</a></li>
						</ul>
					</div>
				</div>
				<!-- Start About-Area -->
				<div class="about-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="f-title text-center">
									<h3 class="title text-uppercase">About Us</h3>
								</div>
							</div>
						</div>
						<div class="row">
							@if(isset($response->page_content))
								{!! $response->page_content !!}
							@endif	
						</div>
					</div>
				</div>
				<!-- End About-Area -->
			</div>
		</div>
		<!-- Product Details Section Start -->
@endsection