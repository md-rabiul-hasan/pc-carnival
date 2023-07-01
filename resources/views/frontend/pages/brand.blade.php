@extends('frontend.layouts')
@section('page-title', 'our-brands')

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
        @import url('https://fonts.googleapis.com/css?family=Nunito:400,700');


* {
  transition: all 0.3s ease-out;
}

html,
body {
  height: 100%;
  font-family: "Nunito", sans-serif;
  font-size: 16px;
}


h3 {
  color: #262626;
  font-size: 17px;
  line-height: 24px;
  font-weight: 700;
  margin-bottom: 4px;
}

p {
  font-size: 17px;
  font-weight: 400;
  line-height: 20px;
  color: #666666;

  &.small {
    font-size: 14px;
  }
}

.go-corner {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  width: 32px;
  height: 32px;
  overflow: hidden;
  top: 0;
  right: 0;
  background-color: #6C2F3A;
  border-radius: 0 4px 0 32px;
}

.go-arrow {
  margin-top: -4px;
  margin-right: -4px;
  color: white;
  font-family: courier, sans;
}

.card1 {
  display: block;
  position: relative;
  max-width: 262px;
  background-color: #f2f8f9;
  border-radius: 4px;
  padding: 32px 24px;
  margin: 12px;
  text-decoration: none;
  z-index: 0;
  overflow: hidden;
  transition: all 0.2s ease-out;
    box-shadow: 0px 4px 8px rgba(38, 38, 38, 0.2);
    top: -4px;
    border: 1px solid #cccccc;
    background-color: white;

  &:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: -16px;
    right: -16px;
    background: #6C2F3A;
    height: 32px;
    width: 32px;
    border-radius: 32px;
    transform: scale(1);
    transform-origin: 50% 50%;
    transition: transform 0.25s ease-out;
  }

  &:hover:before {
    transform: scale(21);
  }
}

.card1:hover {
  p {
    transition: all 0.3s ease-out;
    color: rgba(255, 255, 255, 0.8);
  }
  h3 {
    transition: all 0.3s ease-out;
    color: #ffffff;
  }
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
							<li class="active"><a href="#">Brands</a></li>
						</ul>
					</div>
				</div>
				<!-- Start About-Area -->
				<div class="about-area">
					<div class="container">
						<div class="row">	
                            @foreach($brands as $brand)
                                <div class="col-md-3">
                                    <a class="card1" href="{{ route('product-filter.category', ['brand' => $brand->slug]) }}">
                                        <h3>{{ $brand->title }}</h3>
                                    </a>
                                </div>	
                            @endforeach                            				
						</div>
					</div>
				</div>
				<!-- End About-Area -->
			</div>
		</div>
		<!-- Product Details Section Start -->
@endsection