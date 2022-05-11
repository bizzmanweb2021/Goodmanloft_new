<?php

namespace App\Http\Controllers;
use App\Models\ProductDetails;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    //

    public function show( $id )
    {
        $product = ProductDetails::where('id',$id)->first();
        if($product)
        {
            echo "hii";
        }
        else
        {
            echo "bye";
        }
    }
    public function search(Request $request)
    {
        $search_text = $request->get('query');
    }

}
