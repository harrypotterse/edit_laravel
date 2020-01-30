<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $categories = Partner::all();

        return view('admin.partner.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.partner.create');
    }


    public function store(Request $request)
    {


        $request->validate([
            'avatar'        => 'required',
        ]);


        $input = $request->except(['avatar']);

        $file = $request->file('avatar');

        if($file){


        $fileName = $file->getClientOriginalName();

        $fileEx = $file->getClientOriginalExtension();

        $fileName = uniqid() . '_Mokhtar_ali.' . $fileEx;

        $file->move('images/', $fileName);

        $input['avatar'] =  $fileName;

        }

        Partner::create($input);

        session()->flash('message', 'تم اضافه الراعي بنجاح');

        return redirect('dashboard/partner');

    }



    public function destroy($id)
    {
        $category = Partner::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح الراعي بنجاح');

        return redirect('dashboard/partner');
    }
}
