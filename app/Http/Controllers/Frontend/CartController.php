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

    public function addToCart(Request $request)
    {
        $product = Product::find($request->input('product_id'));
        
        if (!$product) {
            // Product not found, return an error message
            return response()->json(['error' => 'Product not found'], 404);
        }
        
        $cart = $request->session()->get('cart', []);
        
        if (isset($cart[$product->id])) {
            // Item already exists, increment the quantity
            $cart[$product->id]['quantity']++;
        } else {
            // Item doesn't exist, add it to the cart
            $item = [
                'id'       => $product->id,
                "image"    => $product->image,
                'title'    => $product->title,
                'slug'     => $product->slug,
                'price'    => $product->current_price,
                'quantity' => 1
            ];
            
            $cart[$product->id] = $item;
        }
        
        $request->session()->put('cart', $cart);
        
        // Return a success message
        return response()->json(['message' => 'Product added to cart'], 200);
    }
    

}
