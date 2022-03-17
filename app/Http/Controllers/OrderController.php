<?php

namespace App\Http\Controllers;
use App\Models\Order;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function index()
    {
        return view('Admin.orders.index');
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


}
