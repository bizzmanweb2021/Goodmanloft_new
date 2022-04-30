<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $category_id = $request->category_id;
        $sub_id = $request->sub_id;
        $fromrange = $request->fromrange;
        $torange = $request->torange;
        $data = DB::table('products')->select('products.*');
        $data->where('Category_id',$category_id);
        if(!empty($sub_id)){
            $data->where('SubCategory_id',$sub_id);
        }
        $data->where('Price','>=',(int)$fromrange);
        $data->where('Price','<=',(int)$torange);
        echo json_encode($data->get());
    }

}
