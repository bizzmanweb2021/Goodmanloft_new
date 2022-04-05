<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
    //
    public function index()
    {
        $faq = FAQ::orderBy('id')->get();
        return view('Frontend.FAQ.index')->with('faq',$faq);
    }
    public function term()
    {
        return view('Frontend.Terms&Condition.index');
    }
    public function updateFaq(Request $request)
    {

        $faq = DB::table('f_a_q_s')->where('id','=', $request->id)->update([
            'Question' => $request->input('Question'),
            'Answer' => $request->input('Answer')
        ]);
        return redirect()->route('admin.faqView');

    }
}
