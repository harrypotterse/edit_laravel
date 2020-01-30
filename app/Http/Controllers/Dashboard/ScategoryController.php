<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scategory;

class ScategoryController extends Controller
{
    public function index()
    {
        $categories = Scategory::all();

        return view('admin.scategory.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.scategory.create');
    }


    public function store(Request $request)
    {

        $request->validate([

            'ar*'    => 'required',
            'ar*'    => 'required',
            'avatar' => 'required'
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

        Scategory::create($input);

        session()->flash('message', 'تم اضافه القسم بنجاح');

        return redirect('dashboard/scategory');

    }





    public function edit($id)
    {

        $category = scategory::findOrFail($id);

        return view('admin.scategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'    => 'required',
            'ar*'    => 'required',
        ]);

        $category = scategory::findOrFail($id);

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

        session()->flash('message', 'تم تعديل القسم بنجاح');

        return redirect('dashboard/scategory');
    }


    public function destroy($id)
    {
        $category = Scategory::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح القسم بنجاح');

        return redirect('dashboard/scategory');
    }
}
