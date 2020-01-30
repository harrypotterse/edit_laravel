<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
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

        Category::create($input);

        session()->flash('message', 'تم اضافه القسم بنجاح');

        return redirect('dashboard/category');

    }





    public function edit($id)
    {

        $category = Category::findOrFail($id);

        return view('admin.category.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'    => 'required',
            'ar*'    => 'required',
        ]);

        $category = Category::findOrFail($id);

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

        return redirect('dashboard/category');
    }


    public function destroy($id)
    {
        $category = Category::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح القسم بنجاح');

        return redirect('dashboard/category');
    }
}
