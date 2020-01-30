<?php

namespace App\Http\Controllers\Vendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{

    public function index()
    {
        $user = User::findOrFail(Auth::user()->id);

        return view('vendor.profile', compact('user'));
    }





    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'name'    => 'required',
            'email'   => 'required',
            'phone'   => 'required',

        ]);

        $user = User::findOrFail($id);

        $input = $request->except(['avatar']);

        $file = $request->file('avatar');

        if($file){


        $fileName = $file->getClientOriginalName();

        $fileEx = $file->getClientOriginalExtension();

        $fileName = uniqid() . '_Mokhtar_ali.' . $fileEx;

        $file->move('images/', $fileName);

        $input['avatar'] =  $fileName;

        }else{

            $input['avatar'] =  $user->avatar;
        }

       $user->update($input);

        session()->flash('message', 'تم تعديل القسم بنجاح');

        return redirect('vendor/profile');



    }


    public function destroy($id)
    {
        //
    }
}
