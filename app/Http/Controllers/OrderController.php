<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipping_charge;
use App\Models\Billing_address;
use App\Models\Cart;
use Session;
use App\Models\User;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\product;
use App\Models\Pickup;
use App\Models\Shipping_address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
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

        $id = User::where('id',Auth::user()->id)->first();
        $user_id = $id->user_id;
       
        $request->validate([
            'coupon'    => 'nullable|exists:coupon_code'
        ], [
            'coupon.exists' => 'Invalid Coupon'
        ]);

        $coupon = Coupon::where('coupon_code', $request->coupon)->first();
        $cart = Cart::where('user_id', Auth::user()->id)->get();
        $exit = Order::where('user_id', Auth::user()->id)->where('coupon_code', $request->coupon)->first();
        $order_total = 0;
        foreach ($cart as $item) {
            $cart = Cart::find($item->product_id);

            $order_total = $order_total + ($cart->price * $item->quantity);
        }

        $total = $order_total;



        $coupon     = Coupon::where('coupon_code', $request->apply_coupon)->first();
        $exit       = Order::where('user_id', Auth::user()->id)->where('coupon_code', $request->apply_coupon)->first();
        $discount_type = null;
        $after_discount_amount = 0;
        $discount_amount = 0;
        $how_may_discount = 0;
        $coupon_code = null;
        if ($coupon && !$exit) {
            if ($order_total > $coupon->discount_amount) {
                if ($coupon->discount_type == 'Fixed') {
                    $total = $after_discount_amount = $total - $coupon->discount_amount;
                    $discount_type = 'Fixed';
                    $discount_amount = $coupon->discount_amount;
                    $how_may_discount = $coupon->discount_amount;
                } else {
                    $per_cal = ($coupon->discount_amount / 100) * $total;
                    $total = $after_discount_amount =  $total - $per_cal;
                    $discount_type = '%';
                    $discount_amount = $per_cal;
                    $how_may_discount = $coupon->discount_amount;
                }
                $coupon_code = $request->apply_coupon;
            }
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