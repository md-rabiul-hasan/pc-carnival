<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
        $products = Product::get();
        $data =[
            "products" => $products
        ];
        return view('frontend.pages.home.index', $data);
    }
}
