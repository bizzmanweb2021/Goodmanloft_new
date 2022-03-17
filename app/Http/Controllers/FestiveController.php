<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FestiveController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.Festive.index');
    }
}
