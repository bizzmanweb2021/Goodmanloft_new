<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = product::orderBy('id','desc')->limit (5)->get();
        return view('Frontend.Home.index')->with('product',$product);
    }

    public function search(Request $request)
    {

    }


}
