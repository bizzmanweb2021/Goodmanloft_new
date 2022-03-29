<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.Register.register');
    }



    public function store(Request $request)
    {
        $data= $request->validate(['name'=>'required|max:30',
                                   'email'=>'required',
                                   'phone'=>'required',
                                   'retype_password'=>'required'

                                 ]);
                                $value=Hash::make($request->password);

                                $Register=new User;
                                $Register->name=$data['name'];
                                $Register->email=$data['email'];
                                $Register->phone=$data['phone'];
                                $Register->password=$value;
                                $Register->save();


        $notification1=array('alert-type'=>'success','message'=>'Registration Successfully');
            return redirect('/loginpage')->with($notification1);
    }

}
