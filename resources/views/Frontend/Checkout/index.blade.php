@extends('Frontend.layouts.master')
@section('content')
<!-- Page Banner Section Start -->
<div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
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
</div>
<!-- Page Banner Section End -->
 <!--Checkout section start-->
 <div class="checkout-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 ">
    <div class="container sb-border pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
        <div class="row">
            <div class="col-12">

                <!-- Checkout Form Start-->
                <form action="{{ route('check.fetch') }}" method="POST" class="checkout-form">
                    @csrf
                <div class="row row-40">

                    <div class="col-lg-7">

                        <!-- Billing Address -->
                        <div id="billing-form" class="mb-10">
                            <h4 class="checkout-title">Billing Address</h4>
                            <div class="row">
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Full Name*</label>
                                    <input type="text" name="full_name" value="{{ Auth::user()->name }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input type="email" name="email" value="{{ Auth::user()->email }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Phone no*</label>
                                    <input type="text" name="phone" value="{{ Auth::user()->phone }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Country*</label>
                                    <select id="country" name="country" class="form-control" >
                                        <option value="" >--Select--</option>
                                            @foreach (App\Models\Country::all() as $Country)
                                            <option value="{{$Country->id}}">{{$Country->name}} - {{$Country->code}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Address*</label>
                                    <input type="text" name="address" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>City*</label>
                                    <input type="text" name="city" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>State*</label>
                                    <input type="text" name="state">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Zip Code*</label>
                                    <input type="text" name="zip">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Address Type*</label>
                                    <select class="nice-select" name="address_type">
                                        <option value="Home">Home(7am - 7pm)</option>
                                        <option value="Office">Office(9am - 6pm)</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-20">
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
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Full Name*</label>
                                    <input type="text" name="full_name_ship" value="{{ Auth::user()->name }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Email Address*</label>
                                    <input type="email" name="email_ship" value="{{ Auth::user()->email }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Phone no*</label>
                                    <input type="text" name="phone_ship" value="{{ Auth::user()->phone }}" >
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Country*</label>
                                    <select id="country_ship" name="country_ship" class="form-control" >
                                        <option value="" >--Select--</option>
                                            @foreach (App\Models\Country::all() as $Country)
                                            <option value="{{$Country->id}}">{{$Country->name}} - {{$Country->code}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-12 mb-20">
                                    <label>Address*</label>
                                    <input type="text" name="address_ship">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>City*</label>
                                    <input type="text" name="city_ship">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>State*</label>
                                    <input type="text" name="state_ship">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Zip Code*</label>
                                    <input type="text" name="zip_ship">
                                </div>
                                <div class="col-md-6 col-12 mb-20">
                                    <label>Address Type*</label>
                                    <select class="nice-select" name="address_type_ship">
                                        <option value="Home">Home(7am - 7pm)</option>
                                        <option value="Office">Office(9am - 6pm)</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <!-- Cart Total -->
                            <div class="col-12 mb-60">
                                <h4 class="checkout-title">Cart Total</h4>
                                <div class="checkout-cart-total">
                                    <h4>Product <span>Total</span></h4>
                                    @php $sub_total = 0 @endphp
                                    @foreach (App\Models\Cart::get() as $cart)
                                    <?php $sub_total += $cart->total ?>
                                    <ul>
                                        <li>{{ $cart->product_name }} <span>${{ $cart->total }}</span></li>
                                    </ul>
                                    @endforeach
                                    <p>Sub Total <span>${{ $sub_total }}</span></p>
                                </div>
                            </div>
                            <button class="place-order btn btn-sm btn-round">Next: Making Payment</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--Checkout section end-->

@endsection
