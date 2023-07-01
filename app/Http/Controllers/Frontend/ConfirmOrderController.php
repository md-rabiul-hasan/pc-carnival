<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ConfirmOrderController extends Controller
{
    public function confirmOrder(Request $request){
        $cart = session()->get('cart', []);
        $total_order = 0;
        foreach($cart as $cart_item){
            $total_order += $cart_item['price'] * $cart_item['quantity'];
        }
        $order_number = Carbon::now()->timestamp + rand(1, 100);
        $order                  = new Order();
        $order->order_number    = $order_number;
        $order->user_id         = Auth::user()->id;
        $order->total_order     = $total_order;
        $order->delivery_charge = $request->input('delivery_charge');
        $order->total_bill      = $total_order + $request->input('delivery_charge');
        $order->payment_mode    = $request->input('payment_method');
        $order->save();

        foreach($cart as $cart_item){
            $orderItem              = new OrderItem();
            $orderItem->order_id    = $order->id;
            $orderItem->product_id  = $cart_item['id'];
            $orderItem->quantity    = $cart_item['quantity'];
            $orderItem->unit_price  = $cart_item['price'];
            $orderItem->total_price = $cart_item['price'] * $cart_item['quantity'];
            $orderItem->save();
        }

        $customer             = new Customer();
        $customer->order_id   = $order->id;
        $customer->first_name = $request->input("first_name");
        $customer->last_name  = $request->input("last_name");
        $customer->phone      = $request->input("phone");
        $customer->email      = $request->input("email");
        $customer->division   = $request->input("division");
        $customer->district   = $request->input("district");
        $customer->address    = $request->input("address");
        $customer->comment    = $request->input("comment");
        $customer->save();

        session()->forget('cart');

        return redirect()->route('order.voucher', $order_number);

        
    }
}
