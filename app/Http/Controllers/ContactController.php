<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('Frontend.ContactUs.contact');
    }
    public function save(Request $request)
    {
        $con = new Contact();
        $con->name = $request->name;
        $con->phone = $request->phone;
        $con->email = $request->email;
        $con->subject = $request->subject;
        $con->message = $request->message;
        $con->save();

        $notification=array('alert-type'=>'success','message'=>'Message Successfully Sent.');
        return back()->with($notification);
        
    }

    public function show()
    {
        $data = Contact::orderBy('id','desc')->get();
        return view('Admin.UserContact.index')->with('contacts',$data);
    }

    // public function showSearch(Request $request)
    // {
    //     $search = $request->input('search');
    //     $data = Contact::query()->where('name', 'LIKE', "%{$search}%")->orWhere('email', 'LIKE', "%{$search}%")->get();
    //     return view('Admin.UserContact.index', compact('data'));
    // }
}
