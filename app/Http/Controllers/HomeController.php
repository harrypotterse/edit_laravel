<?php

namespace App\Http\Controllers;

use Auth;
use App\Blog;
use App\Test;
use App\User;
use App\About;
use App\Advise;
use App\Slider;
use App\package;
use App\Partner;
use App\Category;
use App\rwedding;
use App\Scategory;
use App\Wcategory;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use LaravelLocalization;


class HomeController extends Controller
{

    public function index()
    {
        $slider = Slider::findOrFail(1);

        $scategories = Scategory::latest()->take(6)->get();

        $reals = rwedding::latest()->take(3)->get();

        $partners = Partner::latest()->take(6)->get();

        $advices = Advise::latest()->take(4)->get();

        $about = About::findOrFail(1);

        return view('home', compact('slider', 'scategories', 'reals', 'partners', 'advices', 'about'));
    }

    public function about()
    {

        $tests = Test::latest()->take(3)->get();

        $partners = Partner::latest()->take(6)->get();

        $about = About::findOrFail(1);

        return view('about', compact('about', 'tests', 'partners'));

    }

    public function rwedding($id)
    {

        $category = Wcategory::findOrFail($id);

        return view('rwedding.index', compact('category'));

    }

    public function getwedding($id)
    {

        $wedding = rwedding::findOrFail($id);

        $mors = rwedding::where([
            ['id', '!=', $id],
            ['wcategory_id', '=', $wedding->wcategory_id],
        ])->take(3)->get();

        $scategories = Scategory::latest()->take(3)->get();

        return view('rwedding.show', compact('wedding', 'mors', 'scategories'));

    }

    public function weddingidea($id)
    {

        $category = Category::findOrFail($id);

        $scategories = Scategory::latest()->take(3)->get();

        return view('category.index', compact('category', 'scategories'));

    }

    public function getblog($id)
    {

        $blog = Blog::findOrFail($id);

        $blogs = Blog::where([
            ['id', '!=', $id],
            ['category_id', '=', $blog->category_id],
        ])->take(3)->get();

        return view('category.show', compact('blog', 'blogs'));

    }
    public function getpackage()
    {
        $lang = LaravelLocalization::getCurrentLocaleName();
        $package = package::take(4)->orderBy('id', 'DESC')->where('Language', $lang)->get();
        return $package;
    }
    public function getpackage_()
    {
        $lang = LaravelLocalization::getCurrentLocaleName();
        $package = package::take(4)->orderBy('id', 'DESC')->where('Language', $lang)->get();
        return $package;
    }
    public function getqou()
    {
        $package = $this->getpackage_();
        return view('price', compact('package'));
    }

    public function planningwedding()
    {
        $scategories = Scategory::latest()->take(6)->get();
        $advices = Advise::latest()->take(4)->get();
        $about = About::findOrFail(1);
        return view('wedding_palnning', compact('scategories', 'advices', 'about'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function companyregister()
    {
        return view('auth.company');
    }

    public function storevendor(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required | unique:users,email',
            'password' => 'required',
        ]);
        $input = $request->all();
        $input['role_id'] = 2;
        $input['password'] = bcrypt($request->password);
        $input['Activation'] = 0;
        $user = User::create($input);
        Auth::login($user);
        return redirect()->route('pricingpag');
        return redirect('/pricing')->with('flash_message_success', 'تم الاضافه بنجاح ');
    }

}
