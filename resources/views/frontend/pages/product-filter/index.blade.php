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
                        <input type="checkbox" name="availability" value="in_stock">
                        <span>In Stock</span>
                    </label>
                    <label class="filter">
                        <input type="checkbox" name="availability" value="pre_order">
                        <span>Pre Order</span>
                    </label>
                    <label class="filter">
                        <input type="checkbox" name="availability" value="out_of_stock">
                        <span>Out Of Stock</span>
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
                            <input type="submit" value="Filter" id="filterSubmit" />
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
                                <h3 class="title-group-3 g1nt-1">Product Searching</h3>
                            </div>
                        </div>
                        <div class="product-filter">
                            <ul class="nav">
                                <li class="grid">
                                    <a class="active" href="#display-1-2" role="tab" data-bs-toggle="tab"></a>
                                </li>
                            </ul>
                            <div class="sort">
                                <label>Sort By:</label>
                                <select id="sortOrder">
                                    <option value="default" {{ Request::get('sort') == 'default' ? 'selected' : '' }}>Default</option>
                                    <option value="name_asc" {{ Request::get('sort') == 'name_asc' ? 'selected' : '' }}>Name (A - Z)</option>
                                    <option value="name_desc" {{ Request::get('sort') == 'name_desc' ? 'selected' : '' }}>Name (Z - A)</option>
                                    <option value="price_asc" {{ Request::get('sort') == 'price_asc' ? 'selected' : '' }}>Price (Low > High)</option>
                                    <option value="price_desc" {{ Request::get('sort') == 'price_desc' ? 'selected' : '' }}>Price (High > Low)</option>
                                </select>
                            </div>
                            <div class="limit">
                                <label>Show:</label>
                                <select id="itemsPerPage">
                                    <option value="2" {{ Request::get('items') == '2' ? 'selected' : '' }}>2</option>
                                    <option value="16" {{ Request::get('items') == '16' ? 'selected' : '' }}>16</option>
                                    <option value="24" {{ Request::get('items') == '24' ? 'selected' : '' }}>24</option>
                                    <option value="40" {{ Request::get('items') == '40' ? 'selected' : '' }}>40</option>
                                    <option value="80" {{ Request::get('items') == '80' ? 'selected' : '' }}>80</option>
                                    <option value="100" {{ Request::get('items') == '100' ? 'selected' : '' }}>100</option>
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
                               
                                <!-- Start Product-->
                                <div role="tabpanel" class="tab-pane fade show  active" id="display-1-2">
                                    <div class="row">
                                        @foreach($products as $product)
                                            <!-- Start Single-Product -->
                                            <div class="col-lg-3 col-md-4 col-12">
                                                <div class="single-product">
                                                    @if($product->discount_percentage > 0)
                                                    <div class="label_new">
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
                                                        <h5><a href="{{ route('product-details.index', $product->slug)}}">{{$product->title}}</a></h5>
                                                        <div class="price-box">
                                                            <span class="price">{{ number_format($product->current_price, 0)}}৳</span>
                                                            @if($product->discount_percentage > 0)
                                                                <span class="old-price">{{$product->selling_price}}৳</span>
                                                            @endif
                                                        </div>
                                                        <div class="product-button">
                                                            <button onclick="addToCart({{ $product->id }})"><i class="fa fa-shopping-cart"></i> Add to
                                                                Cart</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Single-Product -->
                                        @endforeach
                                    </div>
                                    <!-- Start Pagination Area -->
                                    <div class="pagination-area">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="pagination">
                                                    {{ $products->appends(request()->query())->links() }}
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="product-result">
                                                    <span>Showing {{ $from }} to {{ $to }} of {{ $total }} ({{ $last_page }} Pages)</span>
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

@push('js')
<script>
    $(document).ready(function() {
        $('#itemsPerPage').change(function() {
            var selectedValue = $(this).val();
            var currentUrl = window.location.href;

            // Remove existing 'items' query parameter, if any
            var updatedUrl = currentUrl.replace(/([&?])items=\d+(&|$)/, '$1');

            // Add the new 'items' query parameter
            updatedUrl = updatedUrl.replace(/&+$/, ''); // Remove trailing ampersands
            updatedUrl = updatedUrl.replace(/(\?|&)$/, ''); // Remove trailing question mark or ampersand

            if (updatedUrl.includes('?')) {
                updatedUrl = updatedUrl + '&items=' + selectedValue;
            } else {
                updatedUrl = updatedUrl + '?items=' + selectedValue;
            }

            window.location.href = updatedUrl;
        });
    });
    $(document).ready(function() {
        $('#sortOrder').change(function() {
            var selectedValue = $(this).val();
            var currentUrl = window.location.href;

            var updatedUrl = currentUrl.replace(/([&?])sort=\w+(&|$)/, '$1');
            updatedUrl = updatedUrl.replace(/&+$/, '');
            updatedUrl = updatedUrl.replace(/(\?|&)$/, '');

            if (updatedUrl.includes('?')) {
                updatedUrl = updatedUrl + '&sort=' + selectedValue;
            } else {
                updatedUrl = updatedUrl + '?sort=' + selectedValue;
            }

            window.location.href = updatedUrl;
        });
    });
</script>

<script>
$(document).ready(function() {
    // Retrieve URL query parameters
    var urlParams = new URLSearchParams(window.location.search);
    var availabilityParams = urlParams.get('availability');

    // Split the availability parameter into an array of selected values
    var selectedAvailabilities = availabilityParams ? availabilityParams.split(',') : [];

    // Check the checkboxes based on the selectedAvailabilities array
    $('input[name="availability"]').each(function() {
        if (selectedAvailabilities.includes($(this).val())) {
            $(this).prop('checked', true);
        }
    });

    $('#filterSubmit').click(function(e) {
        e.preventDefault();

        var priceRange = $("#slider-range").slider("option", "values");
        var minPrice = priceRange[0];
        var maxPrice = priceRange[1];
        var availability = [];

        $('input[name="availability"]:checked').each(function() {
            availability.push($(this).val());
        });

        var urlParams = new URLSearchParams(window.location.search);
        urlParams.set('price_from', minPrice);
        urlParams.set('price_to', maxPrice);
        urlParams.set('availability', availability.join(','));

        var newUrl = window.location.pathname + '?' + urlParams.toString();
        window.location.href = newUrl;
    });
});

$(function() {
    var urlParams = new URLSearchParams(window.location.search);
    var priceFrom = urlParams.get('price_from');
    var priceTo = urlParams.get('price_to');

    // Set the default values if the query parameters are not present
    var defaultPriceFrom = 1;
    var defaultPriceTo = 500000;

    if (priceFrom && priceTo) {
        defaultPriceFrom = parseInt(priceFrom);
        defaultPriceTo = parseInt(priceTo);
    }

    $( "#slider-range" ).slider({
        range: true,
        min: 1,
        max: 500000,
        values: [ defaultPriceFrom, defaultPriceTo ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "৳" + ui.values[ 0 ] + " - ৳" + ui.values[ 1 ] );
        }
    });

    $( "#amount" ).val( "৳" + $( "#slider-range" ).slider( "values", 0 ) +
        " - ৳" + $( "#slider-range" ).slider( "values", 1 ) );
});


</script>






@endpush