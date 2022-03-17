<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Frontend.Register.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */


    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'=>['required','max:10'],
            'password' => ['required', 'confirmed']

        ],

            [
                'email.required' => 'The email is required.',
                'email.email' => 'The email needs to have a valid format.',
                'email.unique' => 'Email id is already registered.',
            ]
    );


     $unique_id = User::orderBy('id', 'desc')->first();
            $number = str_replace('GML','', $unique_id ? $unique_id->unique_id  : 0
        );
        if ($number == 0) {
            $number = 'GML0000001';
        } else {
            $number = "GML" . sprintf("%07d", $number + 1);
        }

        $user = User::create([
            'unique_id'=>$number,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone


        ]);
        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME)->with('registerMsg', 'Register Successfully');;
    }

  public function RegisteredUsers()
    {
         $registered=User::where('Membertype',1)->get();
         return view('Dashboard.index',compact('registered'));
    }




}
