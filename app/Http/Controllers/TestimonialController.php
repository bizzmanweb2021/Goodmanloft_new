<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestimonialController extends Controller
{
    //
    public function show()
    {
        $test = Testimonial::orderBy("id","desc")->get();
        return view('Admin.Testimonial.testimonialView')->with('test',$test);
    }
    public function create()
    {
        return view('Admin.Testimonial.testimonialAdd');
    }
    public function store(Request $request)
    {
            $this->validate($request,['name'=>'required',
                                    'review'=>'required',
            ]);
            $test=new Testimonial();
            $test->name=$request->name;
            $test->review=$request->review;
            $test->save();

            $notification1=array('alert-type'=>'success',
            'message'=>'Review Added Successfully'
            );
            return view('Admin.Testimonial.testimonialView')->with($notification1);
    }

    public function updateTestimonial(Request $request)
    {
        $test = DB::table('testimonials')->where('id','=', $request->id)->update([
            'name' => $request->input('name'),
            'review' => $request->input('review')
        ]);
        return redirect()->route('admin.testimonialView');
    }
}
