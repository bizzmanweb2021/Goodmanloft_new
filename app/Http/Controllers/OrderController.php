<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        
        $data = Cart::orderBy("id","desc")->get();
        return view('Admin.orders.index')->with('carts',$data);
       
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Admin.orders.index');
    }

    public function orderDetails()
    {
        return view('Admin.orders.orderDetails');
    }


}
