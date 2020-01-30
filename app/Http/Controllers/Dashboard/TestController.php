<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Test;

class TestController extends Controller
{
    public function index()
    {
        $categories = Test::all();

        return view('admin.test.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.test.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'avatar'        => 'required',

        ]);


        $input = $request->except(['avatar', 'gallery']);

        $file  = $request->file('avatar');

        if($file){


        $fileName = $file->getClientOriginalName();

        $fileEx = $file->getClientOriginalExtension();

        $fileName = uniqid() . '_Mokhtar_ali.' . $fileEx;

        $file->move('images/', $fileName);

        $input['avatar'] =  $fileName;

        }



        Test::create($input);

        session()->flash('message', 'تم اضافه  بنجاح');

        return redirect('dashboard/test');

    }





    public function edit($id)
    {
        $category = Test::findOrFail($id);

        return view('admin.test.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
        ]);

        $category = Test::findOrFail($id);

        $input = $request->except(['avatar']);

        $file = $request->file('avatar');

        if($file){


        $fileName = $file->getClientOriginalName();

        $fileEx = $file->getClientOriginalExtension();

        $fileName = uniqid() . '_Mokhtar_ali.' . $fileEx;

        $file->move('images/', $fileName);

        $input['avatar'] =  $fileName;

        }else{

            $input['avatar'] =  $category->avatar;
        }



       $category->update($input);

        session()->flash('message', 'تم تعديل  بنجاح');

        return redirect('dashboard/test');
    }


    public function destroy($id)
    {
        $category = Test::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح  بنجاح');

        return redirect('dashboard/test');
    }
}
