<?php

namespace App\Http\Controllers\Dashboard;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\Slider;
use App\User;

class HomeController extends Controller
{

    public function index()
    {
        $blogs = Blog::count();

        $users = User::where('role_id', '=', '3')->count();

        $company = User::where('role_id', '=', '2')->count();

        $service = Service::count();


        return view('admin.index', compact('blogs', 'users', 'company', 'service' ));
    }


    public function getslider()
    {
        $slider = Slider::findOrFail(1);

        return view('admin.pages.slider', compact('slider'));
    }


    public function editslider()
    {
        $slider = Slider::findOrFail(1);

        return view('admin.pages.editslider', compact('slider'));
    }


    public function updateslider(Request $request)
    {
        $request->validate([

            'ar*'    => 'required',
            'en*'    => 'required',
        ]);

        $category = Slider::findOrFail(1);



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

        return redirect('dashboard/slider');
    }


    public function edit($id)
    {
        //
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
