<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Service;
use Auth;
class HomeController extends Controller
{

    public function index()
    {
        
      //  dd('here');
        
        $service = Service::where('user_id', '=', Auth::user()->id)->count();

        $order = Order::count();

        return view('vendor.index', compact('service', 'order'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
