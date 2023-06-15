@extends('frontend.layouts')
@section('page-title', 'cart')

@section('frontend-content')
<div class="container">
    <div class="product-banner-area cart">
        <div class="row">
            <div class="col-md-12">
                <ul class="page-menu">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><a href="#">My Cart</a></li>
                </ul>
            </div>
        </div>

        <div class="row section">
            <div class="col-md-12">
                <div class="content ws-box p-15">
                    <h1 class="title">Shopping Cart </h1>
                    <form action="https://www.startech.com.bd/checkout/cart/edit" method="post"
                        enctype="multipart/form-data">
                        <div class="table-responsive">
                            <table class="table table-bordered cart-table bg-white">
                                <thead>
                                    <tr>
                                        <td class="text-center rs-none">Image</td>
                                        <td class="text-left">Product Name</td>
                                        <td class="text-left rs-none">Model</td>
                                        <td class="text-right rs-none">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0; @endphp
                                    @foreach($cart_items as $item)
                                    @php $total += $item['price'] * $item['quantity']; @endphp
                                    <tr id="cart_single_product_{{ $item['id']}}">
                                        <td class="text-center rs-none"> <a
                                                href="{{ route('product-details.index', $item['slug']) }}"><img
                                                    src="{{ $item['image'] }}"
                                                    alt="{{ $item['title'] }}"
                                                    title="{{ $item['title'] }}"
                                                    class="img-thumbnail cart-image"></a>
                                        </td>
                                        <td class="text-left"><a
                                                href="{{ route('product-details.index', $item['slug']) }}">{{ $item['title'] }}</a>
                                            <br>
                                        </td>
                                        <td class="text-left">
                                            <div class="input-group btn-block" style="max-width: 200px;">
                                                <input type="text"
                                                    name="quantity"
                                                    value="{{ $item['quantity'] }}" size="1" class="form-control cart-input">
                                                    <span>
                                                        <button type="button" class="btn btn-danger btn-sm cart-item-remove" onclick="removeFromCart({{ $item['id'] }})">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </td>
                                        <td class="text-right rs-none">{{ $item['price'] }}৳</td>
                                        <td class="text-right">{{ $item['price'] * $item['quantity'] }}৳</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered bg-white cart-total">
                                <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total:</strong></td>
                                        <td class="text-right amount">{{ number_format($total, 2) }}৳</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total:</strong></td>
                                        <td class="text-right amount">{{ number_format($total, 2) }}৳</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 

                    <div class="buttons">
                        <div class="left-button"><a href="{{ route("index")}}"
                                class="btn btn-primary">Continue Shopping</a></div>
                        <div class="right-button"><a href="{{ route('check-out.index') }}"
                                class="btn btn-primary checkout-btn">Confirm Order</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    function removeFromCart(id) {
        axios.post('{{ route("cart.remove_to_cart") }}', {
                product_id: id
            })
            .then(function(response) {
                toastr.success("Product removed from cart", 'Success');
                $("#cart_single_product_"+id).hide();
                getCartCount(); // Update cart count
            })
            .catch(function(error) {
                if (error.response) {
                    toastr.error(error.response.data.error, 'Error');
                } else {
                    toastr.error("Product removed from cart Failed", 'Error');
                }
            });
    }
</script>

@endpush