<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.Account.index');
    }
    public function store(Request $request)
    {
        $data = DB::table('users')->where('id', '=', $request->input('add1'))->update([

                'name'=> $request->input('name'),
                'email'=> $request->input('email'),
                'phone'=> $request->input('phone'),
                'password'=>Hash::make($request->input('password')),

        ]);
        if($data)
        {
            return back();
        }

    }
}
