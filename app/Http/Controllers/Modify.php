<?php
namespace App\Http\Controllers;

use App\comment;
use App\Mail\OrderShipped;
use App\package;
use App\service_translations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use LaravelLocalization;
use session;

class Modify extends Controller
{
    public function viewpricing()
    {
        $package = $this->getpackage();
        return view('price', compact('package'));
    }
    public function Activation()
    {
        return view('Activation');
    }

    public function Activ_user($id)
    {
        $seve_data = array();
        DB::table('users')
            ->where('id', $id)
            ->update([
                'Activation' => 1,
            ]);
      
        $data = array('users' => $users);
        $email = $users->email;
        $name = $users->name;
        $seve_data['name'] = $users->name;
        $seve_data['Email'] = $users->Email;
        $seve_data['msg'] = $users->Email;
        $users = User::findOrfail($id);
        Mail::to($email)->send(new OrderShipped($users->toArray()));
        return redirect()->back();
    }
    public function Inactive($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update([
                'Activation' => 0,
            ]);
        return redirect()->back();
    }
    public function getpackage()
    {
        $lang = LaravelLocalization::getCurrentLocaleName();
        $package = package::take(4)->orderBy('id', 'DESC')->where('Language', $lang)->get();
        return $package;
    }
    public function server_data_id(Request $request, $id)
    {
        $request->session()->put('Service', $id);
        $lang = Laravelc::getCurrentLocaleName();
        if ($lang == "English") {
            $lang = "en";
        } else {
            $lang = "ar";
        }
        $service_translations = service_translations::where('service_id', $id)->where('locale', $lang)->get();
        $comment = comment::orderBy('id', 'DESC')->where('Service', $id)->get();
        return view('list-single', compact('service_translations', 'comment'));
    }
    public function comment(Request $request)
    {
        $lang = LaravelLocalization::getCurrentLocaleName();
        if ($lang == "English") {
            $lang = "Comment added successfully";
        } else {
            $lang = "تم اضافة تعليق بنجاح";
        }
        $this->validate($request, [
            'comment' => 'required',
        ], [
            'comment.required' => 'من فضلك ادخل التعليق',
        ]);
        $comment = new comment();
        $comment->Name = Auth::user()->name;
        $comment->comment = $request->input('comment');
        $comment->Service = $request->session()->get('Service');
        $comment->save();
        $request->session()->forget('Service');
        return redirect()->back()->with('alert-success', $lang);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
