<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;

class PriceController extends Controller
{
    public function index()
    {
        $prices = Price::all();

        return view('admin.price.index', compact('prices'));
    }

    public function create()
    {

        return view('admin.price.create');
    }


    public function store(Request $request)
    {


        $request->validate([
            'name'        => 'required',
            'price'        => 'required',
            'feat1'        => 'required',
            'feat2'        => 'required',
            'feat3'        => 'required',
            'feat4'        => 'required',

        ]);


        $input = $request->all();

        Price::create($input);

        session()->flash('message', 'تم اضافه الراعي بنجاح');

        return redirect('dashboard/price');

    }



    public function destroy($id)
    {
        $category = Partner::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح الراعي بنجاح');

        return redirect('dashboard/partner');
    }
}
