@extends('Frontend.layouts.master')
@section('content')
<!--About Us Area Start-->
<style>
        td {
            font-weight: bold;
        }

    </style>
    <main class="main single-product">
        <div class="page-content mb-10 pb-6">
            <div class="container">
                <section class="">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 mx-auto">
                                <div class="row aiz-steps arrow-divider">
                                    <!-- <div class="col active">
                                        <div class="text-center text-primary confirmation-check"> -->
                                            <!-- <i class="la-3x mb-2 las la-check-circle"></i> -->
                                            <!-- <img src="assets/images/confirmation.png" alt="" class="img-fluid" style="width: 50px;">
                                            <h3 class="fs-14 fw-600 d-none d-lg-block"> Confirmation
                                            </h3>
                                        </div>
                                    </div> -->
                                </div>

                            </div>
                        </div>
                    </div>
                </section>


                <section class="py-4">
                    <div class="container text-left">
                        <div class="row">
                            <div class="col-xl-8 mx-auto">
                                <div class="card shadow-sm border-0 rounded">
                                    <div class="card-body">
                                        <div class="text-center py-4 mb-4 confirmation-check">
                                            <!-- <i class="la la-check-circle la-3x text-success mb-3"></i> -->
                                            <img src="assets/images/confirmation.png" alt="" class="img-fluid" style="width: 50px;">
                                            <h1 class="h3 mb-3 fw-600">Thank You for Your Order!</h1>
                                            
                                        </div>
                                        <div class="mb-4">
                                            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Summary</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table">
                                                        <tr>
                                                            <td class="w-50 fw-600">Name:</td>
                                                            <td>{{ Auth::user()->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 fw-600">Email:</td>
                                                            <td>{{ Auth::user()->email }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 fw-600">Mobile No:</td>
                                                            <td>{{ Auth::user()->phone }}</td>
                                                        </tr>
                                                        @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $shipping)
                                                        <tr>
                                                            <td class="w-50 fw-600">Shipping address:</td>
                                                            <td>{{ $shipping->address_ship }}<br>{{ $shipping->city_ship }}<br>{{ $shipping->state_ship }}<br>{{ $shipping->zip_ship }}</td>
                                                        </tr>
                                                        @endforeach
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table">
                                                    @php $sub_total = 0 @endphp
                                                    @foreach (App\Models\Cart::Join('products','carts.product_id','=','products.id')->where("carts.user_id",Auth::user()->id)->select('carts.product_name','carts.product_image','carts.created_at','carts.total','carts.price','carts.quantity','products.discount','products.sale')->get() as $key=>$cart)
                                                      <?php 
                                                    if($cart->sale == 'yes'){
                                                     $sub_total += ($cart->price - ($cart->price* ($cart->discount/100))) *  $cart->quantity;
                                                    }else{
                                                      $sub_total +=  $cart->price * $cart->quantity ;
                                                         }
                                        
                                                         ?>
                                                        @endforeach
                                                        <tr>
                                                            <td class="w-50 fw-600">Total Order Amount:</td>
                                                            <td>${{ $sub_total }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 fw-600">Currency:</td>
                                                            <td>SGD</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="w-50 fw-600">Payment method:</td>
                                                            <td>Paid by Paypal</td>
                                                        </tr>
                                                     
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="fw-600 mb-3 fs-17 pb-2">Order Details</h5>
                                            <div>
                                                <table class="table table-responsive-md">
                                                    <thead>
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th width="30%">Product</th>
                                                            <th>Name</th>
                                                            <th>Quantity</th>
                                                            <th class="text-right">Price</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    @php $sub_total = 0 @endphp
                                                    @foreach (App\Models\Cart::Join('products','carts.product_id','=','products.id')->where("carts.user_id",Auth::user()->id)->select('carts.product_name','carts.product_image','carts.created_at','carts.total','carts.price','carts.quantity','products.discount','products.sale')->get() as $key=>$cart)
                                                      <?php 
                                                    if($cart->sale == 'yes'){
                                                     $sub_total += ($cart->price - ($cart->price* ($cart->discount/100))) *  $cart->quantity;
                                                    }else{
                                                      $sub_total +=  $cart->price * $cart->quantity ;
                                                         }
                                        
                                                         ?>
                                                            <tr>
                                                               <td>{{ $key+1 }}</td>
                                                                <td><img src="{{ $cart->product_image }}"></td>
                                                                <td>{{ $cart->product_name }}</td>
                                                                <td> {{ $cart->quantity }}</td>
                                                                <td>${{ ($cart->price - ($cart->price*($cart->discount/100))) *  $cart->quantity }}</td>
                                                                @endforeach 
                                                                
                                                            </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-md-6">
                                              </div>
                                                <div class="col-xl-6 col-md-6 ml-auto mr-0">
                                                    <table class="table">
                                                        <tbody>
                                                      
                                                            <tr>
                                                            @php
                                            $shipping_amount = 0;
                                            $charges = DB::table('shipping_charges')->where('country_id','200');
                                            if($charges->count() > 0){
                                                $charge = $charges->first();
                                                if(250 > $sub_total){
													$shipping_amount = $charge->delivery_amount;
												}
                                            }
              
                                            $coupon_amount = 0;
											$coupon_code = '';
                                            $apply_coupon = DB::table('apply_coupon')->where("user_id",Auth::user()->id)->orderBy('id','DESC');
                                            if($apply_coupon->count() > 0){
                                                $coupon_id = $apply_coupon->first()->coupon_id;

                                                $coupon = DB::table('coupons')->where("id",$coupon_id);
                                                if($coupon->count() > 0){
                                                    $coupon = $coupon->first();
                                                    
													$coupon_code = $coupon->coupon_code;
                                                    $coupon_amount = $coupon->discount_amount;
                                                    
                                                }
                                            }
                                            App\Models\Cart::where('user_id', auth()->user()->id)->delete();
                                            App\Models\Wishlist::where('user_id', auth()->user()->id)->delete();
                                        @endphp
                                        
                                                                <th>Subtotal</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="fw-600">${{ $sub_total }}</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td class="text-right">
                                                                    <span
                                                                        class="font-italic">{{ $shipping_amount }}.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>Coupon Discount</th>
                                                                <td class="text-right">
                                                                <input type="hidden" id="coupon_code" value="{{ $coupon_code}}">
											                    <input type="hidden" id="shipping_charge" value="{{ $shipping_amount}}">
                                                                    <span
                                                                    type="text" id="coupon_amount" class="font-italic">{{ $coupon_amount}}.00</span>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th><span class="fw-600">Total</span></th>
                                                                
                                                                <td class="text-right">
                                                                    <strong><span>$ @if(250 > $sub_total)
                                                               {{ $sub_total = $sub_total + $shipping_amount - $coupon_amount}}
                                                                @else
                                                                {{ $sub_total = $sub_total - $coupon_amount }}
                                                                 @endif</span></strong>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="shipping-btn ">
                            <a href="/" data-amount="1280" data-id="3" class="btn order_now"><span>Go To Home</span></a> &nbsp;
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </main>

@section('javascript')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('body').addClass('mainloaded')
            }, [1000])
        });
    </script>
@endsection
@endsection
