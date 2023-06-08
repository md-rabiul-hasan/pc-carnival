<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index(){       
        $cart = session()->get('cart', []);
        $data = [
            "cart_items" => $cart
        ];
        return view('frontend.pages.checkout.index', $data);
    }
}
