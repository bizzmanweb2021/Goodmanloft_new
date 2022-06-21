<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $product = product::orderBy('id','desc')->limit (6)->get();
        return view('Frontend.Home.index')->with('product',$product);
    }

    public function search(Request $request)
    {
        // $data = DB::table('categories')
        // ->select('products.*','categories.Category_Name')
        // ->join('categories','categories.id','=','products.Category_id')->get();
        $search = $request->input('search');
        $product = product::query()->where('product_name', 'LIKE', "%{$search}%")->orWhere('Price', 'LIKE', "%{$search}%")->get();
        return view('Frontend.Product.product_page', compact('product'));
    }
    // public function coupon()
    // {
    //    //print_r('called');exit();
      
    //    return view('Frontend.Home.coupon');
    // }


}
