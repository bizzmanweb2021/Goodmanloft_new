<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $abt = AboutUs::orderBy('id')->get();
        return view('Frontend.About.about')->with('about',$abt);
    }
}
