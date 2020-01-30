<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class VendorController extends Controller
{

    public function index()
    {
        $users = User::where("role_id", '=', '2')->latest()->get();

        return view('admin.vendor.index', compact('users'));

    }


    public function destroy($id)
    {
        //
    }
}
