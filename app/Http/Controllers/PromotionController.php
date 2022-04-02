<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use ImageResize;
use Intervention\Image\ImageManagerStatic as Image;

class PromotionController extends Controller
{
    //
    public function index()
    {
        $data = Promotion::orderBy("id","asc")->get();
        return view('Admin.Promotion.promotionView')->with('Promotions',$data);
    }
    public function create()
    {

        return view('Admin.Promotion.promotionAdd');
    }
    public function store(Request $request)
    {
        $this->validate($request,['banner'=>'required|mimes:jpg,png,jpeg'
                                 ]);

                                 $image = $request->banner;
                                 $filename = $image->getClientOriginalName();
                                 $image_resize = Image::make($image->getRealPath())->resize(300,200)->save(public_path('images/'.$filename));
                                 $image_destination =  'images/'.$filename;

                                $promo = new Promotion();
                                $promo->banner=$image_destination;
                                $promo->save();

                                $notification1=array('alert-type'=>'success',
                                'message'=>'Banner Added Successfully'
                                );
                                return redirect()->route('admin.promotionView')->with($notification1);

    }

}
