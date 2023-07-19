<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){
        $searchTerm  = $request->input('search');
        $orderStatus = $request->input('order_status');
        
        $orders = Order::with('customer')
            ->where(function ($query) use ($searchTerm) {
                $query->where('order_number', 'LIKE', "%$searchTerm%")
                    ->orWhereHas('customer', function ($query) use ($searchTerm) {
                        $query->where('first_name', 'LIKE', "%$searchTerm%")
                            ->orWhere('last_name', 'LIKE', "%$searchTerm%")
                            ->orWhere('phone', 'LIKE', "%$searchTerm%");
                    });
            })
            ->when($orderStatus !== null, function ($query) use ($orderStatus) {
                $query->where('status', $orderStatus);
            })
            ->orderBy('id', 'desc')
            ->paginate(2);
        
        $data = [
            "sl" => 1,
            "orders" => $orders
        ];

        return view('backend.order.index', $data);

    }


    public function details(Order $order){
        $order_items = OrderItem::with('product')->where('order_id', $order->id)->get();
        $customer = Customer::where('order_id', $order->id)->first();
        $data = [
            "order" => $order,
            "order_items" => $order_items,
            "customer" => $customer
        ];

        return view('backend.order.details', $data);
    }

    public function statusChange(Request $request, Order $order){
        $order->status = $request->input('order_status');
        $order->save();

        return redirect()->back()->with('message','Order Status Changed Successfully');
    }

}
