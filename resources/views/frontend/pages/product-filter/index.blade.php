@extends('frontend.layouts')
@section('page-title', 'product-filter')

@section('frontend-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <ul class="page-menu">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="#">Bestseller Product</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <!-- shop-filter start -->
            <div class="">
                <div class="area-title">
                    <h3 class="title-group gfont-1">Filters Products</h3>
                </div>
            </div>
            <!-- shop-filter start -->    
            <div class="filter-group ws-box show" data-group-type="status">
                <div class="label">
                  <span>Availability</span>
                </div>
                <div class="items">
                  <label class="filter">
                    <input type="checkbox" name="status" value="7">
                    <span>In Stock</span>
                  </label>
                  <label class="filter">
                    <input type="checkbox" name="status" value="8">
                    <span>Pre Order</span>
                  </label>
                  <label class="filter">
                    <input type="checkbox" name="status" value="9">
                    <span>Up Coming</span>
                  </label>
                </div>
              </div>
            <!-- filter-by end -->

            <div class="shop-filter">
                <h4 class="shop-price-title">Price</h4>
                <div class="info_widget ">
                    <div class="price_filter">
                        <div id="slider-range"></div>
                        <div class="price_slider_amount">
                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                            <input type="submit" value="Filter" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-12">
            <!-- START PRODUCT-AREA -->
            <div class="product-area">
                <div class="row">
                    <div class="col-12">
                        <!-- Start Product-Menu -->
                        <div class="product-menu">
                            <div class="product-title">
                                <h3 class="title-group-3 gfont-1">cameras & photography</h3>
                            </div>
                        </div>
                        <div class="product-filter">
                            <ul class="nav">
                                <li class="list">
                                    <a href="#display-1-1" role="tab" data-bs-toggle="tab"></a>
                                </li>
                                <li class="grid">
                                    <a class="active" href="#display-1-2" role="tab" data-bs-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="sort">
                                <label>Sort By:</label>
                                <select>
                                    <option value="#">Default</option>
                                    <option value="#">Name (A - Z)</option>
                                    <option value="#">Name (Z - A)</option>
                                    <option value="#">Price (Low > High)</option>
                                    <option value="#">Rating (Highest)</option>
                                    <option value="#">Rating (Lowest)</option>
                                    <option value="#">Name (A - Z)</option>
                                    <option value="#">Model (Z - A))</option>
                                    <option value="#">Model (A - Z)</option>
                                </select>
                            </div>
                            <div class="limit">
                                <label>Show:</label>
                                <select>
                                    <option value="#">8</option>
                                    <option value="#">16)</option>
                                    <option value="#">24</option>
                                    <option value="#">40</option>
                                    <option value="#">80</option>
                                    <option value="#">100</option>
                                </select>
                            </div>
                        </div>

                        <!-- End Product-Menu -->
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <!-- Start Product -->
                        <div class="product">
                            <div class="tab-content">
                                <!-- Product -->
                                <div role="tabpanel" class="tab-pane fade" id="display-1-1">
                                    <div class="row">
                                        <div class="listview">
                                            <!-- Start Single-Product -->
                                            <div class="single-product row">
                                                <div class="col-lg-3 col-md-4 col-12">
                                                    <div class="label_new">
                                                        <span class="new">new</span>
                                                    </div>
                                                    <div class="sale-off">
                                                        <span class="sale-percent">-55%</span>
                                                    </div>
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img class="primary-img"
                                                                src="{{ asset('frontend/assets/img/product/mediam/10.jpg')}}" alt="Product">
                                                            <img class="secondary-img"
                                                                src="{{ asset('frontend/assets/img/product/mediam/10bg.jpg')}}" alt="Product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-8 col-12">
                                                    <div class="product-description">
                                                        <h5><a href="#">Various Versions</a></h5>
                                                        <div class="price-box">
                                                            <span class="price">$99.00</span>
                                                            <span class="old-price">$110.00</span>
                                                        </div>
                                                        <span class="rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i>
                                                        </span>
                                                        <p class="description">Nunc facilisis sagittis
                                                            ullamcorper. Proin lectus ipsum, gravida et mattis
                                                            vulputate, tristique ut lectus. Sed et lorem nunc.
                                                            Vestibulum ante ipsum primis in faucibus orci luctus
                                                            et ultrices posuere cubilia Curae; Aenean eleifend
                                                            laoreet congue. Viva..</p>
                                                        <div class="product-action">
                                                            <div class="button-group">
                                                                <div class="product-button">
                                                                    <button><i class="fa fa-shopping-cart"></i>
                                                                        Add to Cart</button>
                                                                </div>
                                                                <div class="product-button-2">
                                                                    <a href="#" data-bs-toggle="tooltip"
                                                                        title="Wishlist"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                    <a href="#" data-bs-toggle="tooltip"
                                                                        title="Compare"><i
                                                                            class="fa fa-signal"></i></a>
                                                                    <a href="#" class="modal-view"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#productModal"
                                                                        title="Quickview"><i
                                                                            class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single-Product -->
                                        </div>
                                    </div>
                                    <!-- Start Pagination Area -->
                                    <div class="pagination-area">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="pagination">
                                                    <ul>
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">></a></li>
                                                        <li><a href="#">>|</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="product-result">
                                                    <span>Showing 1 to 16 of 19 (2 Pages)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Pagination Area -->
                                </div>
                                <!-- End Product -->
                                <!-- Start Product-->
                                <div role="tabpanel" class="tab-pane fade show  active" id="display-1-2">
                                    <div class="row">
                                        <!-- Start Single-Product -->
                                        <div class="col-lg-3 col-md-4 col-12">
                                            <div class="single-product">
                                                <div class="label_new">
                                                    <span class="new">new</span>
                                                </div>
                                                <div class="sale-off">
                                                    <span class="sale-percent">-55%</span>
                                                </div>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="primary-img" src="{{ asset('frontend/assets/img/product/mediam/12.jpg')}}"
                                                            alt="Product">
                                                        <img class="secondary-img"
                                                            src="{{ asset('frontend/assets/img/product/mediam/12bg.jpg')}}" alt="Product">
                                                    </a>
                                                </div>
                                                <div class="product-description">
                                                    <h5><a href="#">Established Fact</a></h5>
                                                    <div class="price-box">
                                                        <span class="price">$99.00</span>
                                                        <span class="old-price">$110.00</span>
                                                    </div>
                                                    <span class="rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </span>
                                                </div>
                                                <div class="product-action">
                                                    <div class="button-group">
                                                        <div class="product-button">
                                                            <button><i class="fa fa-shopping-cart"></i> Add to
                                                                Cart</button>
                                                        </div>
                                                        <div class="product-button-2">
                                                            <a href="#" data-bs-toggle="tooltip"
                                                                title="Wishlist"><i
                                                                    class="fa fa-heart-o"></i></a>
                                                            <a href="#" data-bs-toggle="tooltip"
                                                                title="Compare"><i class="fa fa-signal"></i></a>
                                                            <a href="#" class="modal-view"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#productModal"><i
                                                                    class="fa fa-search-plus"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Single-Product -->
                                    </div>
                                    <!-- Start Pagination Area -->
                                    <div class="pagination-area">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="pagination">
                                                    <ul>
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">></a></li>
                                                        <li><a href="#">>|</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="product-result">
                                                    <span>Showing 1 to 16 of 19 (2 Pages)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Pagination Area -->
                                </div>
                                <!-- End Product = TV -->
                            </div>
                        </div>
                        <!-- End Product -->
                    </div>
                </div>
            </div>
            <!-- END PRODUCT-AREA -->
        </div>
    </div>
</div>
@endsection