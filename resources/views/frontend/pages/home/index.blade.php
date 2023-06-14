@extends('frontend.layouts')
@section('page-title', 'Home')
@section('frontend-content')
   <!-- Featured Category Section Start -->
   @include('frontend.pages.home.feature-category')
   <!-- Featured Category Section End -->
   <!-- banner area Start -->
   @include('frontend.pages.home.banner')
   <!-- banner area End -->
   <!-- Product tab area start -->
   <div class="product-area">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-12">
               <!-- Start Product-Menu -->
               <div class="product-menu style-2">
                  <ul class="nav">
                     <li><a class=" active" href="#display-1-1" role="tab" data-bs-toggle="tab">Latest
                        Product</a>
                     </li>
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
                        @foreach($latest_products as $latest_product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($latest_product->product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$latest_product->product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                    <img class="primary-img" src="{{ asset($latest_product->product->image)}}"
                                       alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $latest_product->product->slug) }}">{{$latest_product->product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$latest_product->product->current_price}}</span>
                                       @if($latest_product->product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$latest_product->product->selling_price}}</span>
                                       @endif
                                    </div>
                                    <div class="hot-deals-button">
                                       <button onclick="addToCart({{ $latest_product->product->id }})">
                                         <i class="fa fa-plus"></i> Add to Cart
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <!-- End Single-Product -->
                        @endforeach
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
   <!-- Best Saller tab area start -->
   <div class="product-area">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-12">
               <!-- Start Product-Menu -->
               <div class="product-menu style-2">
                  <ul class="nav">
                     <li><a class=" active" href="#display-1-1" role="tab" data-bs-toggle="tab">Most
                        Popular</a>
                     </li>
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
                        @foreach($popular_products as $popular_product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($popular_product->product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$popular_product->product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                    <img class="primary-img" src="{{ asset($popular_product->product->image)}}" alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $popular_product->product->slug) }}">{{$popular_product->product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$popular_product->product->current_price}}</span>
                                       @if($popular_product->product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$popular_product->product->selling_price}}</span>
                                       @endif
                                    </div>
                                    <div class="hot-deals-button">
                                       <button onclick="addToCart({{ $popular_product->product->id }})">
                                          <i class="fa fa-plus"></i> Add to Cart
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <!-- End Single-Product -->
                        @endforeach
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
   <!-- Best Saller tab area start -->
   <div class="product-area">
      <div class="container">
         <div class="row">
            <div class="col-12 col-lg-12">
               <!-- Start Product-Menu -->
               <div class="product-menu style-2">
                  <ul class="nav">
                     <li><a class=" active" href="#display-1-1" role="tab" data-bs-toggle="tab">Best
                        Seller</a>
                     </li>
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
                        @foreach($best_products as $best_product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($best_product->product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$best_product->product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                       <img class="primary-img" src="{{ asset($best_product->product->image)}}"
                                       alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $best_product->product->slug) }}">{{$best_product->product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$best_product->product->current_price}}</span>
                                       @if($best_product->product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$best_product->product->selling_price}}</span>
                                       @endif
                                    </div>
                                     <div class="hot-deals-button">
                                       <button onclick="addToCart({{ $best_product->product->id }})">
                                          <i class="fa fa-plus"></i> Add to Cart
                                       </button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        <!-- End Single-Product -->
                        @endforeach
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
