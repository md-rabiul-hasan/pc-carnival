<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        $about_us = AboutUs::get();
        $data = [
            "about_us" => $about_us
        ];
        return view('backend.about-us.index', $data);
    }

    public function create(){
        return view('backend.about-us.create');
    }

    public function store(Request $request){
        $about_us = new AboutUs();
        $about_us->about_us = $request->input('about_us');
        $about_us->save();
        return redirect()->route('admin.about-us.index');
    }
    
}
