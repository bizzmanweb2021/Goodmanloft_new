<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutAdminController extends Controller
{
    //
    public function index()
    {
        $data = AboutUs::orderBy('id')->get();
        return view('Admin.About Us.aboutView')->with('about',$data);
    }
    public function create()
    {
        return view('Admin.About Us.aboutAdd');
    }
    public function show(Request $request)
    {
        $this->validate($request,['description'=>'required',
                                    'title'=>'required',
                                   'image'=>'required|mimes:jpg,png,jpeg'
                                 ]);

                                $img = $request->image;
                                $filename = $img->getClientOriginalName();
                                $image_resize = Image::make($img->getRealPath())->resize(300,200)->save(public_path('images/'.$filename));
                                $image_destination =  'images/'.$filename;

                                $abt=new AboutUs();
                                $abt->Description=$request->description;
                                $abt->Title = $request->title;
                                $abt->Image=$image_destination;
                                $abt->save();
                                $notification1=array('alert-type'=>'success',
                                'message'=>'Product-category Added Successfully'
                                );
                                return redirect()->route('admin.aboutView')->with($notification1);
    }

    public function updateAbout(Request $request)
    {
        $about = DB::table('about_us')->where('id','=',$request->id)->update([
            'Title' => $request->input('Title'),
            'Description' => $request->input('Description')
        ]);
        return redirect()->route('admin.aboutView');
    }
}
