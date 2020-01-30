<style></style>
<?php


namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;

class AboutController extends Controller
{

    public function index()
    {
        $about = About::findOrFail(1);

        return view('admin.about.index', compact('about'));
    }


  


    public function update(Request $request, $id)
    {
        $request->validate([

            'ar*'           => 'required',
            'en*'           => 'required',
        ]);

        $about = About::findOrFail($id);

        $input = $request->except(['avatar']);

        $file = $request->file('avatar');

        if($file){


        $fileName = $file->getClientOriginalName();

        $fileEx = $file->getClientOriginalExtension();

        $fileName = uniqid() . '_Mokhtar_ali.' . $fileEx;

        $file->move('images/', $fileName);

        $input['avatar'] =  $fileName;

        }else{

            $input['avatar'] =  $about->avatar;
        }


       $about->update($input);

        session()->flash('message', 'تم تعديل الصفحه بنجاح');

        return redirect('dashboard/about');

    }

    public function destroy($id)
    {
        //
    }
}
