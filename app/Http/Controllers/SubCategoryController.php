<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Intervention\Image\ImageManagerStatic as Image;


class SubCategoryController extends Controller
{
    //
    public function index()
    {
        $data = DB::table('subcategories')
        ->select('categories.Category_Name','subcategories.SubCategory_image','subcategories.SubCategory_Name','subcategories.id as sub_id')
        ->join('categories','categories.id','=','subcategories.Category_id')->get();
        return view('Admin.SubCategory.subcategory_view')->with('subcategory',$data);

    }
    public function create()
    {
        $cat = category::all();
        return view('Admin.SubCategory.subcategory_add',compact('cat'));
    }



    public function show(Request $request)
    {
        $this->validate($request,['SubCategory_name'=>'required|max:30',
                                   'SubCategory_Image'=>'required|mimes:jpg,png,jpeg'
                                 ]);

                                 $image = $request->SubCategory_Image;
                                 $filename = $image->getClientOriginalName();
                                 $image_resize = Image::make($image->getRealPath())->resize(300,200)->save(public_path('images/'.$filename));
                                 $image_destination =  'images/'.$filename;

                                $SubCategory=new SubCategory();
                                $SubCategory->SubCategory_name=$request->SubCategory_name;
                                $SubCategory->SubCategory_Image=$image_destination;
                                $SubCategory->Category_id=$request->Category_Name;
                                // $SubCategory->Category_Name = $request->Category_Name;
                                $SubCategory->save();

                                $notification1=array('alert-type'=>'success',
                                'message'=>'Product-subcategory Added Successfully'
                                );
                                return redirect()->route('admin.SubCategoryView')->with($notification1);

    }
    public function updateSub(Request $request)
    {

        $category = DB::table('subcategories')->where('id','=', $request->id)->update([
            'SubCategory_Name' => $request->input('SubCategory_Name')
        ]);
        return redirect()->route('admin.SubCategoryView');

    }

}
