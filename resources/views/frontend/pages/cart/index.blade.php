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
                                        <td class="text-left">Quantity</td>
                                        <td class="text-right rs-none">Unit Price</td>
                                        <td class="text-right">Total</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center rs-none"> <a
                                                href="https://www.startech.com.bd/samsung-galaxy-a52"><img
                                                    src="https://www.startech.com.bd/image/cache/catalog/mobile/samsung/galaxy-a52/galaxy-a52-001-47x47.webp"
                                                    alt="Samsung Galaxy A52 Smartphone (8/128GB)"
                                                    title="Samsung Galaxy A52 Smartphone (8/128GB)"
                                                    class="img-thumbnail"></a>
                                        </td>
                                        <td class="text-left"><a
                                                href="https://www.startech.com.bd/samsung-galaxy-a52">Samsung Galaxy
                                                A52 Smartphone (8/128GB)</a>
                                            <br>
                                        </td>
                                        <td class="text-left rs-none">Galaxy A52</td>
                                        <td class="text-left">
                                            <div class="input-group btn-block" style="max-width: 200px;">
                                                <input type="text"
                                                    name="quantity"
                                                    value="1" size="1" class="form-control cart-input">
                                                <span>
                                                    <button type="button"   class="btn btn-danger btn-sm"> <i class="fa fa-trash cart-item-remove"></i></button></span>
                                            </div>
                                        </td>
                                        <td class="text-right rs-none">39,999৳</td>
                                        <td class="text-right">39,999৳</td>
                                    </tr>
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
                                        <td class="text-right amount">39,999৳</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total:</strong></td>
                                        <td class="text-right amount">39,999৳</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 

                    <div class="buttons">
                        <div class="left-button"><a href="https://www.startech.com.bd/"
                                class="btn btn-primary">Continue Shopping</a></div>
                        <div class="right-button"><a href="https://www.startech.com.bd/checkout/onepagecheckout"
                                class="btn btn-primary checkout-btn">Confirm Order</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection