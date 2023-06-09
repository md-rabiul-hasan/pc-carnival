<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetails($slug){
        $product = Product::where('slug', $slug)->first();
        $data = [
            "product" => $product
        ];
        return view('frontend.pages.product-details', $data);
    }
}
