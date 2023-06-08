<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){           
        $cart = session()->get('cart', []);
        $data = [
            "cart_items" => $cart
        ];
        return view('frontend.pages.cart.index', $data);
    }

    public function addToCart(Request $request){
        $product = Product::find($request->input('product_id'));


        $cart = $request->session()->get('cart', []);

        if (isset($cart[$product->id])) {
            // Item already exists, increment the quantity
            $cart[$product->id]['quantity']++;
        } else {
            // Item doesn't exist, add it to the cart
            $item = [
                'id' => $product->id,
                "image" => $product->images[0]->image_path,
                'title' => $product->title,
                'price' => $product->current_price,
                'quantity' => 1
            ];
    
            $cart[$product->id] = $item;
        }
    
        $request->session()->put('cart', $cart);

        $cart = $request->session()->get('cart', []);

    }

}
