<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DynamicPages;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){   
        $response =  DynamicPages::where('page_name', 'about_us')->first();
        $data = [
            "response" => $response
        ];   
        return view('frontend.pages.about-us.index', $data);
    }
}
