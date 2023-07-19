<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminHomeController extends Controller
{
    public function dashboard(){
        $data = [
            "total_product" => Product::count(),
            "total_order" => Order::count(),
            "total_order_amount" => Order::where('status', 0)->sum('total_bill'),
            "pending_order" => Order::where('status', 0)->count(),
        ];
        return view('backend.dashboard.dashboard', $data);
    }

    public function orderChart(){
        $total_pending = Order::where('status', 0)->count();
        $total_shipped = Order::where('status', 1)->count();
        $total_delivered = Order::where('status', 2)->count();
        $total_cancelled = Order::where('status', 3)->count();
        $data = [
            [
                "value" => $total_pending,
                "color" => "#FACC2E",
                "highlight" => "#F7BE81",
                "label" => "Pending",
            ],
            [
                "value" => $total_shipped,
                "color" => "#D7DF01",
                "highlight" => "#AEB404",
                "label" => "Shipped",
            ],
            [
                "value" => $total_delivered,
                "color" => "#31B404",
                "highlight" => "#2EFE2E",
                "label" => "Delivered",
            ],
            [
                "value" => $total_cancelled,
                "color" => "#B40404",
                "highlight" => "#FA5858",
                "label" => "Cancelled",
            ]
        ];

        return response()->json($data);

    }
}

