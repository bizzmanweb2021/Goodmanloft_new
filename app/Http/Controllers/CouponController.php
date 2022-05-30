<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipping_charge;
use App\Models\Cart;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'coupon_code' => 'required'
        ]);

       // $total = Cart::where("user_id",Auth::user()->id)->sum('total');
        //if(250 < $total){
            $coupon = Coupon::where('coupon_code', $request->coupon_code);
            if($coupon->count() > 0){

                if(DB::table('apply_coupon')->where(['user_id'=> Auth::user()->id,'coupon_id'=>$coupon->first()->id])->count() > 0){
                    return back()->with(['status'=>'danger','message'=>'Coupon code is already applied.']);
                }else{
                    $cart = DB::table('apply_coupon')->insert(['user_id'=> Auth::user()->id,'coupon_id'=>$coupon->first()->id]);
                    return back()->with(['status'=>'success','message'=>'Coupon code is applied.']);
                }    
            }else{
                return back()->with(['status'=>'danger','message'=>'Invalid Coupon Code.']);
            }
        //}else{
       //     return back()->with(['status'=>'danger','message'=>'Coupon code is not apply.']);
       // }



        exit;

        $coupon = Coupon::where('number', $request->coupon_code)->first();
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $exit = Order::where('user_id', Auth::user()->id)->where('coupon_code', $request->coupon)->first();
        $order_total = 0;
        foreach ($cart as $item) {
            $cart = Cart::find($item->product_id);

            $order_total = $order_total + ($cart->price * $item->quantity);
        }



        // if ($request->home_delivery_select == 1) {
        //     $check = ShippingCharge::where('country', $request->country)->first();
        //     if ($check) {
        //         $total = $order_sum + $check->amount;
        //         $delivery_charge = $check->amount;
        //     } else {
        //         $delivery_charge = 0;
        //         $total = $order_sum;
        //     }
        // } else {
        //     $delivery_charge = 0;
        //     $total = $order_sum;
        // }

        if ($order_total > $coupon->discount_amount && !$exit) {
            $after_discount_amount = 0;
            if ($coupon->discount_type == 'Fixed') {
                $after_discount_amount = $total - $coupon->discount_amount;
            } else {
                $per_cal = ($coupon->discount_amount / 100) * $total;
                $after_discount_amount =  $total - $per_cal;
            }
            $type = $coupon->discount_type == "Fixed" ? 'fixed' : '%';
            echo json_encode([
                'status' => 'success',
                'after_discount_amount' => $after_discount_amount,
                'type' => $type,
                'discount_amount'       => $coupon->discount_amount,
                $order_total
            ]);
        } else {
            echo json_encode(['status' => 'Failed', 'message' => 'Invalid Coupon']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}