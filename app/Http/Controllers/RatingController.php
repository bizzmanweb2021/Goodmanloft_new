<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RatingController extends Controller
{
    //
    public function addRating(Request $request)
    {
        $star_rating = $request->input('product_rating');
        $product_id = $request->input('product_id');


    }
}
