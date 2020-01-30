<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orders = Order::latest()->get();

        return view('vendor.request', compact('orders'));
    }


    public function create()
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
