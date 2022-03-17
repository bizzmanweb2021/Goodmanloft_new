<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function index()
    {
        return view('Admin.payments.index');
    }

    public function create()
    {
        $data = OfflinePay::join('users', 'users.id', '=', 'payments.user_id')
            ->join('orders', 'orders.id', '=', 'payments.order_id')
            ->select('payments.*', 'users.name', 'orders.total', 'orders.payment_status as status')
            ->orderBy('payments.id', 'desc')
            ->get();
        echo $data;
    }

    public function store(Request $request)
    {
        $this->validate($request,['Image'=>'required|mimes:jpg,png,jpeg',
                                   'user_id'=>'required',
                                   'order_id'=>'required',
                                   'Status'=>'required'

                                 ]);
                                $name = $request->file('Image')->getClientOriginalName();
                                $path = $request->file('Image')->store('public/images/Product');
                                $Payment=new Payment();
                                $Payment->user_id=$request->user_id;
                                $Payment->order_id=$request->order_id;
                                $Payment->Status=$request->Status;
                                $Product->save();

    }
}
