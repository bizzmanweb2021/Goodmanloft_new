<?php

namespace App\Http\Controllers;
use Srmklive\PayPal\Services\ExpressCheckout;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\product;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderItem;
use DB;
use Illuminate\Support\Facades\Auth;

class PaypalController extends Controller
{
    //
    public function __construct(){
        $this->provider = new ExpressCheckout();
    }

    public function payment()
    {
        $cart = Cart::where('user_id',auth()->user()->id)->where('product_id',null)->get()->toArray();

        $data = [];

        // return $cart;
        $data['items'] = array_map(function ($item) use($cart) {
            $name=Product::where('id',$item['product_id'])->pluck('product_name');
            return [
                'product_name' =>$name ,
                'Price' => $item['Price'],
                'desc'  => 'Thank you for using paypal',
                'Quantity' => $item['Quantity']
            ];
        }, $cart);

        $data['invoice_id'] ='OGL-'.strtoupper(uniqid());
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');

        $total = 0;
        foreach($data['items'] as $item) {
            $total += $item['Price']*$item['Quantity'];
        }

        $data['total'] = $total;
        if(session('coupon')){
            $data['shipping_discount'] = session('coupon')['value'];
        }
        Cart::where('user_id', auth()->user()->id)->where('product_id', null)->update(['product_id' => session()->get('id')]);

        // return session()->get('id');
        $provider = new ExpressCheckout;

        $response = $provider->setExpressCheckout($data);

        return redirect($response['paypal_link']);
    }
   public function PlaceOrder(Request $request)
   {

        $order=new Order();
        $order->user_id =Auth::id();
        $order->payment_method = $request->input('payment_method');
        $order->coupon_code =$request->input('coupon_code');
        $order->order_total = $request->input('order_total');
        $order->full_name =$request->input('given_name')." ".$request->input('surname');
        $order->email_address =$request->input('email_address');
        $order->address_line_1 =$request->input('address_line_1');
        $order->address_line_2 =$request->input('address_line_2');
        $order->order_currency =$request->input('currency');
        $order->postal_code =$request->input('postal_code');
        $order->country_code =$request->input('country_code');
        $order->payment_status =$request->input('payment_status');
        $order->transaction_id =$request->input('transaction_id');
        $order->discount_amount =$request->input('coupon_amount');
        $order->shipping_charge =$request->input('shipping_charge');
        
        
        $order->save();



         
        $payment = payment::create([
            'user_id'   => Auth::id(),
            'order_id' => $order->id
            ]);

         $cart = Cart::where('user_id',auth()->user()->id)->get()->toArray();

        $data = [];

        // return $cart;
        $data['items'] = array_map(function ($item) use($cart) {
            $name=Product::where('id',$item['product_id'])->pluck('product_name');
            return [
                'product_id' =>$item['product_id'],
                'product_name' =>$name ,
                'Price' => $item['price'],
                'desc'  => 'Thank you for using paypal',
                'Quantity' => $item['quantity']
            ];
        }, $cart);

        $data['invoice_id'] ='OGL-'.strtoupper(uniqid());
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('payment.success');
        $data['cancel_url'] = route('payment.cancel');

        $total = 0;
        $orderItem = [];
        foreach($data['items'] as $item) {
            $total += $item['Price']*$item['Quantity'];
            $orderItem[] = [
                'user_id' => auth()->user()->id,
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'price' => $item['Price'],
                'quantity' =>$item['Quantity'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
        }

        if(!empty($orderItem)){
            OrderItem::insert($orderItem);
        }

        $data['total'] = $total;
        if(session('coupon')){
            $data['shipping_discount'] = session('coupon')['value'];
        }
        Cart::where('user_id', auth()->user()->id)->where('product_id', null)->update(['product_id' => session()->get('id')]);

       // Cart::where('user_id', auth()->user()->id)->delete();
        //Wishlist::where('user_id', auth()->user()->id)->delete();
       if($request->input('payment_method') == 'Paid by Paypal'){
        return response()->json(['status'=>'Payment Done successfully']);
       }
        return redirect($response['paypal_link']);



   }

    public function success(Request $request)

    {
        
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);
        // return $response;

        $data= new payment();
        $data= $request->all();

       //echo"<pre>"; print_r($data); exit();
        $payment=payment::create($data);


        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            request()->session()->flash('success','You successfully pay from Paypal! Thank You');
            session()->forget('cart');
            session()->forget('coupon');
            return redirect()->route('confirmPayment');
        }

        request()->session()->flash('error','Something went wrong please try again!!!');
        return redirect()->back();
    }
    public function cancel() {
          dd('Your payment is canceled. You can create cancel page here.');
        // return view('Payments.cancel');
    }


    // public function success(Request $request) {

    //     $provider = $this->provider;
    //     $response = $provider->getExpressCheckoutDetails($request->token);
    //     // echo "<pre>";
    //     // print_r($response);
    //     // exit();

    //     if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
    //         return view('products.success');
    //     }
    //     dd('Something is wrong.');
    // }

    // public function create_Payment()
    // {
    //      $user =DB::table('payments')
    //             ->select('payment.*','users.email as user_email','orders.order_total as amount')
    //             ->join('users','payments.user_id','=', 'users.id')
    //             ->join('orders','payments.order_id','=','orders.id')
    //             ->get();

    //     return view('Frontend.Shipping.index');
    // }


    // public function payment() {
    //     $data = [];
    //     $data['items'] = [
    //         [
    //             'name' => 'devnote tutorial create',
    //             'price' => 160,
    //             'desc' => 'Description for devnote tutorial!',
    //             'qty' => 1
    //         ]
    //     ];

    //     $data['invoice_id'] = 1;
    //     $data['invoice_description'] = "Your order #{$data['invoice_id']} Invoice";
    //     $data['return_url'] = route('payment.success');
    //     $data['cancel_url'] = route('payment.cancel');
    //     $data['total'] = 160;

    //     $provider = $this->provider;
    //     $response = $provider->setExpressCheckout($data);
    //     $response = $provider->setExpressCheckout($data, true);
    //     return redirect($response['paypal_link']);
    // }
}
