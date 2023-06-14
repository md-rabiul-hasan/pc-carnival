<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailsController extends Controller
{
    public function index($slug){

        $product = Product::where("slug", $slug)->with('brand', 'images')->first();
        $relatedProductIds = DB::table('related_products')->where('product_id', $product->id)->pluck('related_product_id');
    
        $relatedProducts = DB::table('products')
            ->select('id', 'title', 'image', 'slug', 'current_price')
            ->whereIn('id', $relatedProductIds)
            ->get();
            
        $data = [
            "product"         => $product,
            "relatedProducts" => $relatedProducts
        ];
        return view('frontend.pages.product-details.index', $data);
    }
}
