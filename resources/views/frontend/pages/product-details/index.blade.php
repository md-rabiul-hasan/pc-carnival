@extends('frontend.layouts')
@section('page-title', 'product-details')

@section('frontend-content')
<section class="page-content product-details">

	<!-- Product Details Section Start -->
	<div class="product-banner-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="page-menu">
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="#">{{ $product->title }}</a></li>
					</ul>
				</div>
			</div>
			<div class="basic row">
				<div class="col-md-5 left">
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
				<div class="col-md-7 right" id="product">
					<div class="pd-summary">
						<div class="product-short-info">
							<h1 itemprop="name" class="product-name">{{ $product->title }}</h1>
							<table class="product-info-table">
								<tbody>										
									<tr class="product-info-group">
										<td class="product-info-label">Status: </td>
										<td class="product-info-data product-status"> {{ $product->quantity > 0 ? "In Stock" : "Out Of Stock" }}</td>
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

						</div>
						<h2 class="price-h2">Price</h2>
						<div>
							<label class="p-wrap cash-payment active">
								<span class="price">{{ number_format($product->current_price,2) }} ৳</span>
							</label>
						</div>
						<div class="cart-option">
							<label class="quantity">
								<span class="ctl"><i class="fa fa-minus"></i></span>
								<span class="qty"><input type="text" name="quantity" id="input-quantity" value="1"
										size="2"></span>
								<span class="ctl increment"><i class="fa fa-plus"></i></span>
								<input type="hidden" name="product_id" value="26146">
							</label>
							<button id="button-cart" class="btn btn-primary submit-btn"
								data-loading-text="Loading...">Buy
								Now</button>
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
										<li data-area="description">Description</li>
										<li class="hidden-xs" data-area="ask-question">Questions (0)</li>
										<li data-area="write-review">Reviews (0)</li>
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
								<section class="ask-question q-n-r-section bg-white m-tb-15" id="ask-question">
									<div class="section-head">
										<div class="title-n-action">
											<h2>Questions (0)</h2>
											<p class="section-blurb">Have question about this product? Get specific
												details about this product from expert.</p>
										</div>
										<div class="q-action">
											<a href="https://www.startech.com.bd/account/question?product_id=26146"
												class="btn st-outline">Ask Question</a>
										</div>
									</div>
									<div id="question">
										<div class="empty-content">
											<span class="icon material-icons">
												<i class="question-icon fa fa-commenting"></i>
											</span>
											<div class="empty-text">There are no questions asked yet. Be the first
												one to ask a question.</div>
										</div>
									</div>
								</section>
								<section class="review  q-n-r-section bg-white m-tb-15" id="write-review">
									<div class="section-head">
										<div class="title-n-action">
											<h2>Reviews (0)</h2>
											<p class="section-blurb">Get specific details about this product from
												customers who own it.</p>
											<div class="average-rating">
											</div>
										</div>
										<div class="q-action">
											<a href="https://www.startech.com.bd/account/review?product_id=26146"
												class="btn st-outline">Write a Review</a>
										</div>
									</div>
									<div id="review">
										<div class="empty-content">
											<span class="icon material-icons"><i class="question-icon fa fa-star"></i></span>
											<div class="empty-text">This product has no reviews yet. Be the first
												one to write a review.</div>
										</div>
									</div>
								</section>
							</div>
							<div class="col-lg-3 col-md-12 c-left">
								<section class="related-product-list">
									<h3>Related Product</h3>
									<div class="p-s-item">
										<div class="image-holder">
											<a href="https://www.startech.com.bd/samsung-galaxy-a13"><img
													src="https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-a13/galaxy-a13-001-80x80.webp"
													alt="Samsung Galaxy A13 Smartphone (4/64GB)" width="80"
													height="80"></a>
										</div>
										<div class="caption">
											<h4 class="product-name">
												<a href="https://www.startech.com.bd/samsung-galaxy-a13">Samsung
													Galaxy A13 Smartphone (4/64GB)</a>
											</h4>
											<div class="p-item-price price">
												<span>20,999৳</span> <span class="btn btn-primary details-add-to-cart-btn"><i
													class="fa fa-shopping-cart"></i></span>
											</div>
											<div class="actions">
												<span class="btn btn-primary details-add-to-cart-btn" onclick="compare.add('26140');"><i
														class="fa fa-shopping-cart"></i>Add to Cart</span>
											</div>
										</div>
									</div>
									<div class="p-s-item">
										<div class="image-holder">
											<a href="https://www.startech.com.bd/samsung-galaxy-a13-6-128gb"><img
													src="https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-a13/galaxy-a13-001-80x80.webp"
													alt="Samsung Galaxy A13 Smartphone (6/128GB)" width="80"
													height="80"></a>
										</div>
										<div class="caption">
											<h4 class="product-name">
												<a href="https://www.startech.com.bd/samsung-galaxy-a13-6-128gb">Samsung
													Galaxy A13 Smartphone (6/128GB)</a>
											</h4>
											<div class="p-item-price price">
												<span>23,999৳</span>
											</div>
											<div class="actions">
												<span class="btn btn-primary details-add-to-cart-btn" onclick="compare.add('26140');"><i
														class="fa fa-shopping-cart"></i>Add to Cart</span>
											</div>
										</div>
									</div>
									<div class="p-s-item">
										<div class="image-holder">
											<a href="https://www.startech.com.bd/samsung-galaxy-m12"><img
													src="https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-m12/galaxy-m12-001-80x80.webp"
													alt="Samsung Galaxy M12 Smartphone (6/128GB)" width="80"
													height="80"></a>
										</div>
										<div class="caption">
											<h4 class="product-name">
												<a href="https://www.startech.com.bd/samsung-galaxy-m12">Samsung
													Galaxy M12 Smartphone (6/128GB)</a>
											</h4>
											<div class="p-item-price price">
												<span>23,499৳</span>
											</div>
											<div class="actions">
												<span class="btn btn-primary details-add-to-cart-btn" onclick="compare.add('26140');"><i
														class="fa fa-shopping-cart"></i>Add to Cart</span>
											</div>
										</div>
									</div>
									<div class="p-s-item">
										<div class="image-holder">
											<a href="https://www.startech.com.bd/samsung-galaxy-f22"><img
													src="https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-f22/galaxy-f22-001-80x80.webp"
													alt="Samsung Galaxy F22 Smartphone (6/128GB)" width="80"
													height="80"></a>
										</div>
										<div class="caption">
											<h4 class="product-name">
												<a href="https://www.startech.com.bd/samsung-galaxy-f22">Samsung
													Galaxy F22 Smartphone (6/128GB)</a>
											</h4>
											<div class="p-item-price price">
												<span>23,999৳</span>
											</div>
											<div class="actions">
												<span class="btn btn-primary details-add-to-cart-btn" onclick="compare.add('26140');"><i
														class="fa fa-shopping-cart"></i>Add to Cart</span>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Product Details End -->


</section>
@endsection