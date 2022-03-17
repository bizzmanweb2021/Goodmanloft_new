<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Pickup;
use App\Models\product;
use App\Models\shipping;
use DB;
use App\Models\Shipping_charge;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    //
    public function frontShow()
    {
        return view('Frontend.Shipping.index');
    }
    public function index()
    {
        $data = DB::table('shipping_charges')
        ->select('countries.name','shipping_charges.delivery_amount')
        ->join('countries','countries.id','=','shipping_charges.Country_id')->get();
        return view('Admin.Shipping.shipping_view')->with('shipping',$data);
    }
    public function create()
    {
        $Getcountrylist = Country::all();
        return view('Admin.Shipping.shipping',compact('Getcountrylist'));
    }



    public function store(Request $request)
    {
        $ship = new Shipping_charge();
        $ship->delivery_amount = $request->delivery_amount;
        $ship->country_id = $request->country_name;
         $ship->country_name = $request->country_name;
        $ship->save();

        $notification1=array('alert-type'=>'success',
        'message'=>'shipping Added Successfully'
        );
        return redirect()->route('admin.shippingView')->with($notification1);

    }



}
