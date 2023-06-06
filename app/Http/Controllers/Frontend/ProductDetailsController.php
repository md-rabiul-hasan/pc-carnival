<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index($slug){
        $product = Product::where("slug", $slug)->with('brand', 'images')->first();
        $data = [
            "product" => $product
        ];
        return view('frontend.pages.product-details.index', $data);
    }
}
