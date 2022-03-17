<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index()
    {
        $faq = FAQ::orderBy('id')->get();
        return view('Frontend.FAQ.index')->with('faq',$faq);
    }
}
