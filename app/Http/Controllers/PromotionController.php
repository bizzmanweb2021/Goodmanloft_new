<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //
    public function index()
    {
        return view('promotions.index');
    }
    public function create()
    {
        return view('promotions.promotion_add');
    }
}
