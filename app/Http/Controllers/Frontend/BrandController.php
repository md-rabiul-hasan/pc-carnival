<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::get();
        $data = [
            "brands" => $brands
        ];
        return view('frontend.pages.brand', $data);
    }
}
