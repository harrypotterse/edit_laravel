<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Blog::all();

        return view('admin.blog.index', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.blog.create', compact('categories'));
    }


    public function store(Request $request)
    {


        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'avatar'        => 'required',
            'gallery'       => 'required',
            'category_id'  => 'required'

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



        Blog::create($input);

        session()->flash('message', 'تم اضافه المقال بنجاح');

        return redirect('dashboard/blog');

    }





    public function edit($id)
    {
        $categories = Category::all();

        $category = Blog::findOrFail($id);

        return view('admin.blog.edit', compact('category', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
            'category_id'  => 'required'
        ]);

        $category = Blog::findOrFail($id);

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

        return redirect('dashboard/blog');
    }


    public function destroy($id)
    {
        $category = Blog::findOrFail($id)->delete();

        session()->flash('message', 'تم مسح المقال بنجاح');

        return redirect('dashboard/blog');
    }
}
