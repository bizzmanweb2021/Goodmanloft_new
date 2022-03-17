<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqAdminController extends Controller
{
    //
    public function index()
    {
        $data = FAQ::orderBy('id')->get();
        return view('Admin.FAQ.faqView')->with('faq',$data);
    }
    public function create()
    {
        return view('Admin.FAQ.faqAdd');
    }
    public function show(Request $request)
    {
        $this->validate($request,['question'=>'required',
                                    'answer'=>'required',
                                 ]);


                                $faq=new FAQ();
                                $faq->Question=$request->question;
                                $faq->Answer = $request->answer;
                                $faq->save();
                                $notification1=array('alert-type'=>'success',
                                'message'=>'FAQ Added Successfully'
                                );
                                return redirect()->route('admin.faqView')->with($notification1);
    }
}
