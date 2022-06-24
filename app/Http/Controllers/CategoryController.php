<?php

namespace App\Http\Controllers;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;


class CategoryController extends Controller
{
    //
    public function index()
    {
        $data = category::orderBy('id')->get();
        return view('Admin.Category.category_view')->with('category',$data);
    }
    public function create()
    {
        return view('Admin.Category.category_add');
    }

    public function show(Request $request)
    {
        $this->validate($request,['Category_name'=>'required|max:30',
                                   'Category_Image'=>'required|mimes:jpg,png,jpeg',
                                 ]);

                                $image = $request->Category_Image;
                                $filename = $image->getClientOriginalName();
                                $image_resize = Image::make($image->getRealPath())->resize(300,200)->save(public_path('images/'.$filename));
                                $image_destination =  'images/'.$filename;

                                $Category=new Category();
                                $Category->Category_name=$request->Category_name;
                                $Category->Category_Image=$image_destination;
                                $Category->save();
                                $notification1=array('alert-type'=>'success',
                                'message'=>'Product-category Added Successfully'
                                );
                                return redirect()->route('admin.CategoryView')->with($notification1);
    }
    public function update(Request $request)
    {

        $category = DB::table('categories')->where('id','=', $request->id)->update([
            'Category_Name' => $request->input('Category_Name')
        ]);
        return redirect()->route('admin.CategoryView');
    }

}
