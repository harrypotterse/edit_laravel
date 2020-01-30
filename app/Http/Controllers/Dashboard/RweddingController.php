<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\rwedding;
use App\Wcategory;

class RweddingController extends Controller
{

    public function index()
    {
        $categories = rwedding::all();

        return view('admin.rwedding.index', compact('categories'));
    }

    public function create()
    {
        $categories = Wcategory::all();

        return view('admin.rwedding.create', compact('categories'));
    }


    public function store(Request $request)
    {
     

        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'avatar'        => 'required',
            'gallery'       => 'required',
            'wcategory_id'  => 'required'

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



        rwedding::create($input);

        session()->flash('message', 'تم اضافه العرس بنجاح');

        return redirect('dashboard/rwedding');

    }





    public function edit($id)
    {
        $categories = Wcategory::all();

        $category = rwedding::findOrFail($id);

        return view('admin.rwedding.edit', compact('category', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'wcategory_id'  => 'required'
        ]);

        $category = rwedding::findOrFail($id);

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

        session()->flash('message', 'تم تعديل العرس بنجاح');

        return redirect('dashboard/rwedding');
    }


    public function destroy($id)
    {
        $category = rwedding::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح العرس بنجاح');

        return redirect('dashboard/rwedding');
    }
}
