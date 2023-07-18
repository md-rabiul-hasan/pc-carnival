@extends('frontend.layouts')
@section('page-title', 'product-details')

@push('css')
	<style>
		a.tag-btn {
			background: #6C2F3A;
			padding: 5px;
			border-radius: 6%;
			color: white;
		}
	</style>
@endpush

@section('frontend-content')
<section class="page-content product-details">

	<!-- Product Details Section Start -->
	<div class="product-banner-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="page-menu">
						<li><a href="{{ route('index') }}">Home</a></li>
						<li class="active"><a href="{{ route('product-details.index', $product->slug) }}">{{ $product->title }}</a></li>
					</ul>
				</div>
			</div>
			<div class="basic row">
				<div class="col-lg-5 col-md-12 col-12 left">
					<div class="images product-images">
						<div class="product-img-holder">

							<a class="thumbnail"
								href="{{ asset($product->image) }}"
								title="{{ $product->title }}"><img class="main-img"
									src="{{ asset($product->image) }}"
									title="{{ $product->title }}"
									alt="{{ $product->title }}" width="500" height="500"></a>
							<meta itemprop="image"
								content="{{ asset($product->image) }}">
						</div>
						<ul class="thumbnails">
							@foreach($product->images as $image)
								<li><a class="thumbnail" href="#"
									title="{{ $product->title }}"><img
										src="{{ asset($image->image_path) }}"
										style="cursor: pointer" onclick="imagePreviewModal('{{ asset($image->image_path) }}')" 
										title="{{ $product->title }}"
										alt="{{ $product->title }}" width="74" height="74"></a>
								</li>
								<meta itemprop="image" content="{{  asset($image->image_path) }}">							
							@endforeach
						</ul>
					</div>
				</div>
				<div class="col-lg-7 col-md-12 col-12 right" id="product">
					<div class="pd-summary">
						<div class="product-short-info">
							<h1 itemprop="name" class="product-name">{{ $product->title }}</h1>
							<table class="product-info-table">
								<tbody>										
									<tr class="product-info-group">
										<td class="product-info-label">Status: </td>
										<td class="product-info-data product-status"> {{ str_replace("_", " ", strtoupper($product->availability) ) }} </td>
									</tr>
									<tr class="product-info-group">
										<td class="product-info-label">Product Code: </td>
										<td class="product-info-data product-code">{{ $product->product_code }}</td>
									</tr>
									<tr class="product-info-group" itemprop="brand"
										itemtype="http://schema.org/Thing" itemscope="">
										<td class="product-info-label">Brand: </td>
										<td class="product-info-data product-brand" itemprop="name">{{ $product->brand->title }}</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="short-description" itemprop="offers" itemscope=""
							itemtype="http://schema.org/Offer">
							<link itemprop="availability" href="http://schema.org/InStock">
							<link itemprop="itemCondition" href="http://schema.org/NewCondition">
							<meta itemprop="priceCurrency" content="BDT">
							<meta itemprop="price" content="23399.0000">
							<h2>Key Features</h2>
							{!! $product->key_features !!}
							@if(isset($product->tags))
								@php 
									$tags = explode(",", $product->tags);
								@endphp
								@foreach($tags as $tag)
									<a href="{{ route('product-filter.index', ['search' => $tag]) }}" class="tag-btn">{{ $tag }}</a>
								@endforeach
							@endif
						</div>
						<h2 class="price-h2">Price</h2>
						<div>
							<label class="p-wrap cash-payment active">
								<span class="price">{{ number_format($product->current_price,2) }} ৳</span>
							</label>
						</div>
						<div class="cart-option">
							<label class="quantity">
								<span class="ctl decrement" style="cursor: pointer"><i class="fa fa-minus"></i></span>
								<span class="qty"><input type="text" name="quantity" id="input-quantity" value="1"
										readonly></span>
								<span class="ctl increment" style="cursor: pointer"><i class="fa fa-plus"></i></span>
							</label>
							<button id="button-cart" class="btn btn-primary submit-btn"
								data-loading-text="Loading..." onclick="addToCartItems({{$product->id}})">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Details Section Start -->

	<!-- Product Details Start-->
	<div class="product-banner-area">
		<div class="row">
			<div class="col-md-12">
				<div class="pd-full">
					<div class="container">
						<div class="row">
							<div class="col-lg-9 col-md-12">
								<div class="navs">
									<ul class="nav">
										@if(!empty($product->specifications))
											<li data-area="specification">Specification</li>
										@endif
										<li data-area="description">
											<a href="#description" class="redirect-text">Description</a>
										</li>
										@if(!empty($product->questions))
											<li class="hidden-xs" data-area="ask-question">
												<a href="#question" class="redirect-text">Questions</a>
											</li>
										@endif
										
									</ul>
								</div>


								@if(!empty($product->specifications))
									<section class="specification-tab m-tb-10" id="specification">
										<div class="section-head">
											<h2>Specification</h2>
										</div>										
										<div class="specification-content">
											{!! $product->specifications !!}
										</div>																
									</section>
								@endif
								<section class="description bg-white m-tb-15" id="description">
									<div class="section-head">
										<h2>Description</h2>
									</div>
									<div class="description-content">
										{!! $product->description !!}
									</div>
								</section>
								@if(!empty($product->questions))
									<section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
										<div class="section-head">
											<div class="title-n-action">
												<h2>Questions</h2>
												<p class="section-blurb">Have question about this product? Get specific
													details about this product from expert.</p>
											</div>										
										</div>
										<div id="question">
											<div class="description-content">
												<div>{!! $product->questions !!}</div>
											</div>
										</div>
									</section>
								@endif
							</div>
							@if(count($relatedProducts) > 0)
							<div class="col-lg-3 col-md-12 c-left">
								<section class="related-product-list">
									<h3>Related Product</h3>

									@foreach($relatedProducts as $relatedProduct)
										<div class="p-s-item">
											<div class="image-holder">
												<a href="{{ route('product-details.index', $relatedProduct->slug)}}">
													<img
														src="{{ asset($relatedProduct->image) }}"
														alt="{{ $relatedProduct->title }}" width="80"
														height="80"></a>
											</div>
											<div class="caption">
												<h4 class="product-name">
													<a href="{{ route('product-details.index', $relatedProduct->slug)}}">{{ $relatedProduct->title }}</a>
												</h4>
												<div class="p-item-price price">
													<span>{{ $relatedProduct->current_price }}৳</span> 
												</div>
												<div class="actions">
													<span class="btn btn-primary details-add-to-cart-btn" onclick="addToCart({{ $relatedProduct->id }})"><i
															class="fa fa-shopping-cart"></i>Add to Cart</span>
												</div>
											</div>
										</div>
									@endforeach

								</section>
							</div>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Details End -->


</section>
@endsection


@push('js')
	<script>
		$(document).ready(function() {
			$('.increment').click(function() {
				var input = $('#input-quantity');
				var value = parseInt(input.val());

				if (!isNaN(value)) {
					input.val(value + 1);
				}
			});

			$('.decrement').click(function() {
				var input = $('#input-quantity');
				var value = parseInt(input.val());

				if (!isNaN(value) && value > 1) {
					input.val(value - 1);
				}
			});
		});


		function addToCartItems(product_id){
			var input = $('#input-quantity');
			var value = parseInt(input.val());

			if (!isNaN(value)) {
				addToCart(product_id, value);
			}
		}
	</script>
@endpush