<?php

namespace App\Http\Controllers;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

class CouponController extends Controller
{
    //
    public function index()
    {
        return view('Admin.Coupon.Coupon_add');
    }
    public function create()
    {
        $cop = Coupon::orderBy('coupon_code')->get();
        return view('Admin.Coupon.couponView')->with('cop',$cop);
    }
    public function store(Request $request)
    {
        $this->validate($request,['coupon_name'=>'required',
                                   'coupon_code'=>'required',
                                   'coupon_description'=>'required',
                                   'start_date'=>'required',
                                   'end_date' => 'required',
                                   'status'=>'required',
                                   'discount_type'=>'required',
                                   'Banner'=>'required',
                        ]);

                        $image = $request->Banner;
                        $filename = $image->getClientOriginalName();
                        $image_resize = Image::make($image->getRealPath())->save(public_path('images/'.$filename));
                        $image_destination =  'images/'.$filename;

                        $coupon = new Coupon();
                        $coupon->coupon_name = $request->coupon_name;
                        $coupon->coupon_code = $request->coupon_code;
                        $coupon->coupon_description = $request->coupon_description;
                        $coupon->start_date = $request->start_date;
                        $coupon->end_date = $request->end_date;
                        $coupon->status = $request->status;
                        $coupon->discount_type = $request->discount_type;
                        $coupon->discount_amount = $request->discount_amount;
                        $coupon->Banner = $request->Banner;
                        $coupon->grouped_by_users = $request->grouped_by_users;
                        $coupon->grouped_by_products = $request->grouped_by_products;
                        $coupon->grouped_by_category = $request->grouped_by_category;
                        $coupon->save();

                        $notification1=array('alert-type'=>'success','message'=>'Coupon Added Successfully');
                        return redirect()->route('admin.CouponView')->with($notification1);
    }
}
