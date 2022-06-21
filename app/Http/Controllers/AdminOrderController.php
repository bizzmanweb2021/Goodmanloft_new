<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\Cart;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    
   
    public function index()
    {
		$data['result'] = Order::select(
            'orders.id',
            'orders.transaction_id',
            'orders.full_name',
            'orders.discount_amount',
            'orders.shipping_charge',
            'orders.order_total',
            'orders.payment_status',
            'orders.status_id',
            'status.name as status',
            'orders.created_at as date'
        )
            ->leftjoin('order_statuses as status', 'orders.status_id', '=', 'status.id')
            ->leftjoin('users as user', 'orders.user_id', '=', 'user.id')
            ->OrderBy('id', 'desc')->get();	
        //echo '<pre>'; print_r($data);die;			
        $active = "";
        return view('Admin.orders.index',$data)->with('active',$active);        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Order::select(
            'orders.id',
            'orders.transaction_id',
            'orders.full_name',
            'orders.discount_amount',
            'orders.shipping_charge',
            'orders.order_total',
            'orders.payment_status',
            'orders.status_id',
            'status.name as status',
            'orders.created_at as date'
        )
            
        ->leftjoin('order_statuses as status', 'orders.status_id', '=', 'status.id')
        ->leftjoin('users as user', 'orders.user_id', '=', 'user.id')
        ->OrderBy('id', 'desc')->get();	
			//echo '<pre>'; print_r($data);die;
        echo json_encode($data);
        // return view('Admin.orders.index');
    }
      

    public function orderDetails(Request $request,$id)
    {
       
         $data = Cart::orderBy("id","desc")->get();
         $order =  Order::where('id', $id)->first();
        return view('Admin.orders.orderDetails')->with(['carts'=>$data,'order'=>$order]);
    }

    public function store(Request $request)
    {
		//echo '<pre>';print_r($user);die;
        $request->validate([
            'order_id' => 'required|exists:orders,id',
        ]);

        $order =  Order::where('id', $request->order_id)->first();
        $user = User::find($order->user_id);

        if ($request->update_payment == 1) {
            Order::where('id', $request->order_id)->update([
                'payment_status' => $request->status_id
            ]);
        }
        if ($request->update_pick_point == 1) {
            Order::where('id', $request->order_id)->update([
                'in_house_status' => $request->status_id
            ]);
        }
        if ($request->update_self_pick_order_status == 1) {
            Order::where('id', $request->order_id)->update([
                'self_pick_order_status' => $request->status_id,
                'status_id' => $request->status_id
           
            ]);

        }
        echo json_encode(['status' => 'success', 'message' => 'Status Update Successfully']);
    }
	


}
