<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('ship.shipNow');
    }

    public function store(Request $request)
    {
       
        $this->validate($request, [
            "name" => "required|max:255",
            "email" => "email",
            "to_location" => "required|max:50",
            "from_location" => "required|max:50",
            "payment_method" => "required|max:50",
        ]);

        $length = 2;
        $ref_no = 'ADMCL'.'-'. time() . substr(str_shuffle(str_repeat($x='ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
        
        $request['reference_no'] = $ref_no;

        $order = new Order;

        // TODO: Maybe a better & easier way to do this??
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone_no = $request->phone_no;
        $order->to_location = $request->to_location;
        $order->from_location = $request->from_location;
        $order->payment_method = $request->payment_method;
        $order->instructions = $request->instructions;
        $order->reference_no = $ref_no;

        

        $order->save();
        return back()->with('ref_no', $ref_no);
    }

    public function track(Request $request)
    {
       
        return view('ship.track');
    }

    public function orderDetails(Request $request)
    {
        $order = Order::where('reference_no', $request->ref_no)->first();
        // dd($order);
        // TODO: Create a frontend page to show details/populate the order data on frontend :)
        return view('ship.shipDetails', [
            'order' => $order
        ]);
    }

    public function orderList()
    {
        $orders = Order::get();

        return view('admin.orders.index', [
            'orders' => $orders
        ]);
    }
}
