<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function index()
    {
        $Getcountrylist = Country::all();
        return view('country',compact('Getcountrylist'));
    }
}
