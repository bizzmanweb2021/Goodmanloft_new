<?php

namespace App\Http\Controllers;
use Intervention\Image\ImageManagerStatic as Image;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactAdminController extends Controller
{
    //
    public function index()
    {
        $data = ContactUs::orderBy('id')->get();
        return view('Admin.Contact Us.contactViews')->with('contact',$data);
    }
    public function create()
    {
        return view('Admin.Contact Us.contactAdd');
    }
    public function show(Request $request)
    {
        $this->validate($request,[  'address'=>'required',
                                    'phone_no'=>'required',
                                    'email_id'=>'required',
                                 ]);

                                
                                $con=new ContactUs();
                                $con->Address=$request->address;
                                $con->Phone_No= $request->phone_no;
                                $con->Email_Id=$request->email_id;
                                $con->save();
                                $notification1=array('alert-type'=>'success',
                                'message'=>'Contact Details Added Successfully'
                                );
                                return redirect()->route('admin.contactViews')->with($notification1);
    }

    public function updateContact(Request $request)
    {
        $contact = DB::table('contact_us')->where('id','=',$request->id)->update([
            'Address' => $request->input('Address'),
            'Phone_No' => $request->input('Phone_No'),
            'Email_Id' => $request->input('Email_Id')
        ]);
        return redirect()->route('admin.contactViews');
    }
}
