<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PcBuildController extends Controller
{
    public function index(){       
        return view('frontend.pages.pc-build.index');
    }
}
