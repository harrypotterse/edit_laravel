<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Wcategory;

class WcategoryController extends Controller
{

    public function index()
    {
        $categories = Wcategory::all();

        return view('admin.wcategory.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.wcategory.create');
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

        Wcategory::create($input);

        session()->flash('message', 'تم اضافه القسم بنجاح');

        return redirect('dashboard/wcategory');

    }





    public function edit($id)
    {

        $category = Wcategory::findOrFail($id);

        return view('admin.wcategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'    => 'required',
            'ar*'    => 'required',
        ]);

        $category = Wcategory::findOrFail($id);

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

        return redirect('dashboard/wcategory');
    }


    public function destroy($id)
    {
        $category = Wcategory::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح القسم بنجاح');

        return redirect('dashboard/wcategory');
    }
}
