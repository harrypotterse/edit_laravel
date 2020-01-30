<?php

namespace App\Http\Controllers\Dashboard;

use App\Advise;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdviseController extends Controller
{
    public function index()
    {
        $categories = Advise::all();

        return view('admin.advise.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.advise.create');
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'avatar'        => 'required',
            'gallery'       => 'required',

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



        $gallery = array();

        $photos = $request->file('gallery');

        foreach($photos as $file3){

            $name = $file3->getClientOriginalExtension();

            $name =  uniqid() . '_mokhtar_ali_.' . $name;

            $file3->move('images',$name);

            $gallery[] = $name;

            }

            $input['gallery'] = implode('/', $gallery);



            Advise::create($input);

        session()->flash('message', 'تم اضافه المقال بنجاح');

        return redirect('dashboard/advise');

    }





    public function edit($id)
    {

        $category = Advise::findOrFail($id);

        return view('admin.advise.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
        ]);

        $category = Advise::findOrFail($id);

        $input = $request->except(['avatar', 'gallery']);

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

        $gallery = array();

        $photos = $request->file('gallery');

        if($photos){

        foreach($photos as $file3){

            $name = $file3->getClientOriginalExtension();

            $name =  uniqid() . '_mokhtar_ali_.' . $name;

            $file3->move('images',$name);

            $gallery[] = $name;

            $input['gallery'] = implode('/', $gallery);

            }

        }else{

                $input['gallery'] = $category->gallery;
            }


       $category->update($input);

        session()->flash('message', 'تم تعديل المقال بنجاح');

        return redirect('dashboard/advise');
    }


    public function destroy($id)
    {
        $category = Advise::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح المقال بنجاح');

        return redirect('dashboard/blog');
    }
}
