<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function index()
    {
        return view('Admin.Auth.login');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request-> validate(
            [
                'email' => 'required|email',
                'password'=>'required'
            ],
            [
                'email.required' => 'Enter Email',
                'password.required' => 'Enter Password'
            ]
        );

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return redirect()
                ->intended(route('admin.dashboard'));
        }
        return $this->loginFailed();
        // echo "Hii";
    }
    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Login failed, please try again!');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
