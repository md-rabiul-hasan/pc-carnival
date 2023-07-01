<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderVoucherController extends Controller
{
    public function orderVoucher($orderNumber){
        $order = Order::where('order_number', $orderNumber)->first();
        $order_items = OrderItem::with('product')->where('order_id', $order->id)->get();
        $customer = Customer::where('order_id', $order->id)->first();
        $data = [
            "order" => $order,
            "order_items" => $order_items,
            "customer" => $customer
        ];

        return view('frontend.pages.order.voucher', $data);
    }
}
