<?php

namespace App\Http\Controllers\Backend\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePageProduct;

class HomePageProductController extends Controller
{
    public function index(){
        $data = [
            "sl" => 1,
            "home_page_products" => HomePageProduct::with('product')->get(),
        ];
        return view('backend.home-page.product.index', $data);
    }

    public function create(){
        return view('backend.home-page.product.create');
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

        return redirect()->route('home-page-product.index')->with('message','Home Page Product Setup Successfully');

    }

    public function edit(){
        $latest_products = HomePageProduct::with('product')->where('status', 'LATEST')->get();
        $popular_products = HomePageProduct::with('product')->where('status', 'POPULAR')->get();
        $best_seller_products = HomePageProduct::with('product')->where('status', 'BEST')->get();
        $data = [
            "latest_products" => $latest_products,
            "popular_products" => $popular_products,
            "best_seller_products" => $best_seller_products,
        ];
        return view('backend.home-page.product.edit', $data);
    }


    public function update(Request $request){
        HomePageProduct::truncate();
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

        return redirect()->route("admin.home-page-product.index")->with('message','Home Page Product Setup Updated Successfully');
    }
}
