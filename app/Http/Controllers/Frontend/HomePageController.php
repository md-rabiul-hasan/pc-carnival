<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomePageProduct;

class HomePageController extends Controller
{
    public function index(){
        $data =[
            "latest_products" => HomePageProduct::with('product')->where('status', 'LATEST')->get(),
            "popular_products" => HomePageProduct::with('product')->where('status', 'POPULAR')->get(),
            "best_products" => HomePageProduct::with('product')->where('status', 'BEST')->get(),
        ];
        return view('frontend.pages.home.index', $data);
    }
}
