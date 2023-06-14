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
                        @foreach($products as $product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                    <img class="primary-img" src="{{ asset($product->image)}}"
                                       alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $product->slug) }}">{{$product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$product->current_price}}</span>
                                       @if($product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$product->selling_price}}</span>
                                       @endif
                                    </div>
                                    <span class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    </span>
                                    <div class="hot-deals-button">
                                       <button onclick="addToCart({{ $product->id }})">
                                         <i class="fa fa-plus"></i> Add to Cart
                                       </button>
                                       <div class="hot-deals-button-2">
                                          <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                             class="fa fa-heart-o"></i></a>
                                          <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                             class="fa fa-signal"></i></a>
                                       </div>
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
                        @foreach($products as $product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                    <img class="primary-img" src="{{ asset($product->image)}}" alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $product->slug) }}">{{$product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$product->current_price}}</span>
                                       @if($product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$product->selling_price}}</span>
                                       @endif
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
                                          <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                             class="fa fa-heart-o"></i></a>
                                          <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                             class="fa fa-signal"></i></a>
                                       </div>
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
                        @foreach($products as $product)
                        <!-- Start Single-Product -->
                           <div class="col-12">
                              <div class="single-product style-2">
                                 @if($product->discount_percentage > 0)
                                    <div class="sale-off">
                                       <span class="sale-percent">-{{$product->discount_percentage}}%</span>
                                    </div>
                                 @endif
                                 <div class="product-img">
                                    <a href="#">
                                       <img class="primary-img" src="{{ asset($product->image)}}"
                                       alt="Product">
                                    </a>
                                 </div>
                                 <div class="product-description">
                                    <h5><a href="{{ route('product-details.index', $product->slug) }}">{{$product->title}}</a></h5>
                                    <div class="price-box">
                                       <span class="price">৳ {{$product->current_price}}</span>
                                       @if($product->discount_percentage > 0)
                                          <span class="old-price">৳ {{$product->selling_price}}</span>
                                       @endif
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
                                          <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                             class="fa fa-heart-o"></i></a>
                                          <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                             class="fa fa-signal"></i></a>
                                       </div>
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
