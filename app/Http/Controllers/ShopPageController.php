<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Request;

class ShopPageController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.Product.index');
    }
    public function show($id)
    {
        $product = product::find( $id );
        if($product)
            return view( 'Frontend.Product.index' )->with( 'product', $product );
        else
            return abort(404,"something went wrong");
    }
    public function product_show($id)
    {

        if(!empty(request()->sub_id))
        {
            $product = product::where('SubCategory_id',request()->sub_id)->where('Category_id',$id)->get();
        }
        else
        {
            $product = product::where('Category_id',$id)->orderBy('id')->get();
        }
        return view('Frontend.Product.product_page')->with('product',$product);

    }
    public function filterAll($id)
    {
        $all = product::orderBy('id',$id)->get();
        return view ('Frontend.Product.product_page')->with('all',$all);
    }

    public function paging()
    {
        $products = product::simplePaginate(10);
        return view('Frontend.Product.product_page', compact('products'));
    }

    public function filter(Request $request)
    {
        $sId = $request->get();
        // print_r($sId);
        // if($sId==1)
        // {
        //     echo "hi";
        // }
        echo json_encode($sId);
    }

}
