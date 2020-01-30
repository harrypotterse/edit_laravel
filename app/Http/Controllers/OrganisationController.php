<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Scategory;
use App\Service;

class OrganisationController extends Controller
{

    public function index()
    {
        $categories = Scategory::latest()->get();

        return view('organisation.index', compact('categories'));
    }





    public function show($id)
    {
        $category = Scategory::findOrFail($id);

        $categories = Scategory::latest()->get();


        return view('organisation.show', compact('category', 'categories'));
    }


    public function store(Request $request)
    {
        $request->validate([

            'name'    => 'required',
            'phone'   => 'required',
            'email'   => 'required',
            'message' => 'required',
            'service' => 'required',
            'date'    => 'required'

        ]);

        $input = $request->all();
        foreach($request->service as $service){
            $input['service'] = $service;
        }
        Order::create([
            'name'     => $request->name,
            'phone'    => $request->phone,
            'email'    => $request->email,
            'message'  => $request->message,
            'service'  => $service,
            'date'     => $request->date,

        ]);
        session()->flash('message', 'تم طلب الخدمه بنجاح');
        return redirect('/');

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
