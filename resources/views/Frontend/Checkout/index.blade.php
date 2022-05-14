@extends('Frontend.layouts.master')
@section('content')
<!-- Page Banner Section Start -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Shopping Cart</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Shopping Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<!-- Page Banner Section End -->
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
</div>
 <!--Checkout section start-->
<div class="checkout-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 ">
    <div class="container sb-border pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="row">
            <div class="col-12">
                <!-- Checkout Form Start-->
                <form action="{{ route('shipping.show') }}" method="GET" class="checkout-form">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7">
                            <!-- Billing Address -->
                            <div id="billing-form" class="mb-5">
                                <h4 class="checkout-title">Billing / Shipping Address</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Name*</label>
                                        <input type="text" name="full_name" value="{{ Auth::user()->name }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Email*</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Mobile*</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Country*</label>
                                        <select id="country" name="country" class="form-control" >
                                            <option value="" >Singapore</option>
                                                @foreach (App\Models\Country::all() as $Country)
                                                <option value="{{$Country->id}}">{{$Country->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    @foreach (App\Models\Billing_address::orderBy('id','desc')->limit(1)->get() as $bill)
                                        <div class="col-12 mb-5">
                                            <label>Address*</label>
                                            <input type="text" name="address"  value="{{ $bill->address }}" >
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>City*</label>
                                            <input type="text" name="city" value="{{ $bill->city }}">
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>State*</label>
                                            <input type="text" name="state" value="{{ $bill->state }}">
                                        </div>
                                        <div class="col-md-6 col-12 mb-5">
                                            <label>Zip Code*</label>
                                            <input type="text" name="zip" value="{{ $bill->zip }}">
                                        </div>
                                    @endforeach
                                    <div class="col-12 mb-5">
                                        <div class="check-box">
                                            <input type="checkbox" id="shiping_address" name="shipping_address" data-shipping>
                                            <label for="shiping_address">Ship to Different Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Shipping Address -->
                            <div id="shipping-form">
                                <h4 class="checkout-title">Shipping Address</h4>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Full Name*</label>
                                        <input type="text" name="full_name_ship" value="{{ Auth::user()->name }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Email Address*</label>
                                        <input type="email" name="email_ship" value="{{ Auth::user()->email }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Phone no*</label>
                                        <input type="text" name="phone_ship" value="{{ Auth::user()->phone }}" >
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Country*</label>
                                        <select id="country_ship" name="country_ship" class="form-control" >
                                            <option value="" >Singapore</option>
                                                @foreach (App\Models\Country::all() as $Country)
                                                <option value="{{$Country->id}}">{{$Country->name}} - {{$Country->code}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                    @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $shipping)
                                    <div class="col-12 mb-5">
                                        <label>Address*</label>
                                        <input type="text" name="address_ship" value="{{ $shipping->address_ship }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>City*</label>
                                        <input type="text" name="city_ship" value="{{ $shipping->city_ship }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>State*</label>
                                        <input type="text" name="state_ship" value="{{ $shipping->state_ship }}">
                                    </div>
                                    <div class="col-md-6 col-12 mb-5">
                                        <label>Zip Code*</label>
                                        <input type="text" name="zip_ship" value="{{ $shipping->zip_ship }}">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                                <div class="col-12 mb-60">
                                    <h4 class="checkout-title">Cart Total</h4>
                                    <div class="checkout-cart-total">
                                        <h4>Product <span>Total</span></h4>
                                        @php $sub_total = 0 @endphp
                                        @foreach (App\Models\Cart::where("user_id",Auth::user()->id)->get() as $cart)
                                        <?php $sub_total += $cart->total ?>
                                        <ul>
                                            <!-- <li><img src="{{ $cart->product_image }}" style="width: 75px; height:100px;"></li> -->
                                            <li>{{ $cart->product_name }} <span>${{ $cart->total }}</span></li>
                                        </ul>
                                        @endforeach
                                        <p>Sub Total <span>${{ $sub_total }}</span></p>
                                        <p>Shipping
                                            <span class="badge badge-secondary" style="float: none; color:black;">
                                            <a data-bs-toggle="modal" data-bs-target="#myModal">?</a>
                                        </span><span  style="opacity: 0.8;">Calculated at next step</span></p>
                                        <p>Coupon Code<span>
                                            <input type="text" style="background-color: white; width:120px; height:40px;">
                                        </span></p>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h1 class="modal-title">Shipping Policy</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                    <p>We ship direct from Singapore via Easyparcel for Singapore orders. International orders are currently not available. All orders shipped are trackable. You'll be able to track and manage your delivery by using the Shipping Confirmation email that we send as soon as your order begins its journey.

Based on your location, delivery times are:

Singapore

1.Delivers Next Business Day after order processing.
2.You’ll be asked to select a Delivery Window of either 9am to 5pm or 5pm to 10pm.
Please note that shipping and delivery charges are also based on size and weight of choice of product.

Please take note that our delivery charge does not include unpacking of your items, assembly, and packaging removal. Most of our items do not require assembly, however if you need us to arrange any of these services do contact us so we can arrange it at a small additional cost.

We offer free delivery for orders above SGD$250.

                                                    </p>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="place-order btn btn-sm btn-round">Next: Making Payment</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Checkout section end-->

@endsection
