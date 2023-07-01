<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ManageOrderController extends Controller
{
    public function manageOrder(){
        $orders = Order::get();
        $data = [
            "orders" => $orders
        ];
        return view('frontend.pages.order.manage-order', $data);
    }
}
