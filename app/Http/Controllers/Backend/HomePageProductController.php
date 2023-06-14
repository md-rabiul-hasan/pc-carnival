<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\HomePageProduct;
use Illuminate\Http\Request;

class HomePageProductController extends Controller
{
    public function index(){
        $data = [
            "sl" => 1,
            "home_page_products" => HomePageProduct::with('product')->get(),
        ];
        return view('backend.home-page-product.index', $data);
    }

    public function create(){
        return view('backend.home-page-product.create');
    }

    public function store(Request $request){

        if ($request->has('latest_products')) {
            $latest_products = $request->input('latest_products');
            foreach ($latest_products as $latest_product) {
                $latestProduct = new HomePageProduct();
                $latestProduct->product_id = $latest_product;
                $latestProduct->status = "LATEST";
                $latestProduct->save();
            }
        }

        if ($request->has('popular_products')) {
            $popular_products = $request->input('popular_products');
            foreach ($popular_products as $popular_product) {
                $popularProduct = new HomePageProduct();
                $popularProduct->product_id = $popular_product;
                $popularProduct->status = "POPULAR";
                $popularProduct->save();
            }
        }

        if ($request->has('best_seller_products')) {
            $best_seller_products = $request->input('best_seller_products');
            foreach ($best_seller_products as $best_seller_product) {
                $bestSellerProduct = new HomePageProduct();
                $bestSellerProduct->product_id = $best_seller_product;
                $bestSellerProduct->status = "BEST";
                $bestSellerProduct->save();
            }
        }

        return redirect()->back();

    }
}
