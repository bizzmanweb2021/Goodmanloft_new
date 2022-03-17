<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.Register.login');
    }


    public function login(Request $request)
    {
        $request->validate(['email'=>'required',
                            'password'=>'required'
                        ]);
        $user  = User::where('email', $request['email'])->first();
        if(!$user || !Hash::check($request['password'], $user->password))
        {
            return "Invalid credential";
        }
        else
        {
            $request->session()->put('user',$user);
            return redirect(route('Homepage'));
        }

    }
}
