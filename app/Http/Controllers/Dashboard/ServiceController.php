<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Scategory;
use App\Service;
use Auth;
class ServiceController extends Controller
{
    public function index()
    {
        $categories = Service::all();

        return view('admin.service.index', compact('categories'));
    }

    public function create()
    {
        $categories = Scategory::all();

        return view('admin.service.create', compact('categories'));
    }


    public function store(Request $request)
    {

        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'avatar'        => 'required',
            'gallery'       => 'required',
            'scategory_id'  => 'required'

        ]);


        $input = $request->except(['avatar', 'gallery']);

        $file = $request->file('avatar');

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

        $input['user_id'] = Auth::user()->id;

        Service::create($input);

        session()->flash('message', 'تم اضافه الخدمه بنجاح');

        return redirect('dashboard/service');

    }



    public function edit($id)
    {
        $categories = Scategory::all();

        $category = Service::findOrFail($id);

        return view('admin.service.edit', compact('category', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'scategory_id'  => 'required'
        ]);

        $category = Service::findOrFail($id);

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

        session()->flash('message', 'تم تعديل الخدمه بنجاح');

        return redirect('dashboard/service');
    }


    public function destroy($id)
    {
        $category = Service::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح الخدمه بنجاح');

        return redirect('dashboard/service');
    }
}
