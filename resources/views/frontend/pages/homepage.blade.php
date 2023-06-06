@extends('frontend.layouts')

@section('content')
    <!-- banner area Start -->
        <div class="product-banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">
                        <div class="single-product-banner">
                            <a href="#"><img src="{{ asset('frontend/assets/img/banner/7.jpg')}}" alt="Product Banner"></a>
                            <div class="banner-text banner-1">
                                <h2>head phone 2015</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="single-product-banner">
                            <a href="#"><img src="{{ asset('frontend/assets/img/banner/8.jpg')}}" alt="Product Banner"></a>
                            <div class="banner-text banner-3">
                                <h2>
                                    <span class="word-1">NQkia </span>
                                    <span class="word-2">Lumia 888 </span>
                                </h2>
                                <h3>many Colors</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="single-product-banner">
                            <a href="#"><img src="{{ asset('frontend/assets/img/banner/9.jpg')}}" alt="Product Banner"></a>
                            <div class="banner-text banner-2">
                            </div>
                            <div class="banner-text banner-4">
                                <h2>Htc <span>N8.</span></h2>
                                <h3>
                                    <span class="word-1">many </span>
                                    <span class="word-2">Colors</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- banner area End -->

    			<!-- Hot Deals area start -->
			<div class="hot-deals-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="area-title">
								<h3 class="title-group border-red gfont-1">Hot Deals</h3>
							</div>
						</div>
					</div>
                    <div class="carosel-circle style-2 row">
                        <div class="active-hot-deals-style-2 owl-carousel">
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/1.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2022/12/31"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Various Versions</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$99.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/2.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2017/04/30"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Ultra Consequad</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$85.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/3.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2017/08/30"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Aldus Consequat</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$90.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/3.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2017/10/30"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Various Versions</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$85.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/3.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2017/07/30"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Ultra Consequad</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$90.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                            <!-- Start Single-hot-deals -->
                            <div class="col-12">
                                <div class="single-hot-deals">
                                    <div class="hot-deals-photo">
                                        <a href="#"><img src="{{ asset('frontend/assets/img/hot-deals/3.jpg')}}" alt="Product"></a>
                                    </div>
                                    <div class="count-down">
                                        <div class="timer">
                                            <div data-countdown="2017/06/30"></div>
                                        </div> 
                                    </div>
                                    <div class="hot-deals-text">
                                        <h5><a href="#" class="name-group">Aldus Consequat</a></h5>
                                        <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span>
                                        <div class="price-box">
                                            <span class="price gfont-2">$85.00</span>
                                            <span class="old-price gfont-2">$110.00</span>
                                        </div>
                                        <div class="hot-deals-button">
                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                            <div class="hot-deals-button-2">
                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single-hot-deals -->
                        </div>
                    </div>
				</div>
			</div>
			<!-- Hot Deals area end -->


            		<!-- Product tab area start -->
			<div class="product-area">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-12">
							<!-- Start Product-Menu -->
							<div class="product-menu style-2">
								<ul class="nav">
								    <li><a class=" active" href="#display-1-1" role="tab" data-bs-toggle="tab">Featured Product</a></li>
								</ul>
							</div>
							<!-- End of product menu -->
						</div>
					</div>
					<!-- Start Product -->
					<div class="product carosel-navigation-style-2">
						<div class="tab-content">
							<!-- Product = Speaker -->
							<div role="tabpanel" class="tab-pane fade show active" id="display-1-1">
                               <div class="row">
                                    <div class="active-product-carosel-style-2 owl-carousel">
                                        <!-- Start Single-Product -->
                                        @foreach($products as $product)
                                            <div class="col-12">
                                                <div class="single-product style-2">
                                                    <div class="label_new">
                                                        <span class="new">new</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="{{ route('product.details', [$product->slug]) }}">
                                                            <img class="primary-img" src="{{ asset($product->image)}}" alt="Product">
                                                        </a>
                                                    </div>
                                                    <div class="product-description">
                                                        <h5><a href="{{ route('product.details', [$product->slug]) }}">{{ $product->title }}</a></h5>
                                                        <div class="price-box">
                                                            <span class="price">{{$product->current_price }}৳</span>
                                                            <span class="old-price">{{ $product->selling_price }}৳</span>
                                                        </div>
                                                        <span class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <div class="hot-deals-button">
                                                            <button><i class="fa fa-plus"></i> Add to Cart</button>
                                                            <div class="hot-deals-button-2">
                                                                <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                <a href="#" data-bs-toggle="tooltip" title="Compare"><i class="fa fa-signal"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>											
                                                </div>
                                            </div>
                                        @endforeach
                                       
                                        <!-- End Single-Product -->
                                    </div>
                                </div>
							</div>
							<!-- End Product = Speaker -->
						</div>
					</div>
					<!-- End Product -->
				</div>	
			</div>
			<!-- Product tab area end -->


@endsection