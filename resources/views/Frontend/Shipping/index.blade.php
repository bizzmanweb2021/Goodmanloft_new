@extends('Frontend.layouts.master')
@section('content')
<head>
    <script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_SANDBOX_CLIENT_ID')}}"></script>

</head>
<!-- Page Banner Section Start -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Shipping Information</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>  Shipping Information</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<!-- Page Banner Section End -->
<!--Contact section start-->
<div class="conact-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
    <div class="container sb-border pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">

     <div class="shipping-info">
         <div class="row">
             <div class="col-md-5">
                 <div class="row">
                     <div class="col-md-6">
                         <h4>Contact</h4>
                     </div>
                     <div class="col-md-6">
                         @foreach (App\Models\Billing_address::orderBy('id','desc')->limit(1)->get() as $bill )
                         <p>{{ $bill->email }}/{{ $bill->phone }}</p>
                         @endforeach

                     </div>
                 </div>
             </div>
             <div class="col-md-7">
                 <div class="shipping-add-change">
                    <a href="{{ route('checkout') }}">Change</a>
                 </div>
             </div>
         </div>
         <hr>
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Ship to</h4>
                    </div>
                    <div class="col-md-6">
                        @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $ship)
                        <p>{{ $ship->full_name_ship }},{{ $ship->address_ship }},{{ $ship->city_ship }},{{ $ship->state_ship }},{{ $ship->zip_ship }}</p>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="shipping-add-change">
                   <a data-bs-toggle="modal" data-bs-target="#myModal">Change</a>
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Shipping Address</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <form action="{{ route('update.shipping') }}" method="POST" id="ship2">
                                    @csrf
                                    <div class="modal-body">
                                        @foreach (App\Models\Shipping_address::orderBy('id','desc')->limit(1)->get() as $ship)
                                        <input type="hidden" id="ship1" name="ship1" value="{{ $ship->id }}">
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Full Name*</label>
                                                <input type="text" class="form-control" name="full_name_ship" value="{{ $ship->full_name_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Email Address*</label>
                                                <input type="email" class="form-control" name="email_ship" value="{{ $ship->email_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Phone no*</label>
                                                <input type="text" class="form-control" name="phone_ship" value="{{ $ship->phone_ship }}" readonly>
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Country*</label>
                                                <select id="country_ship" name="country_ship" class="form-control w-100" >
                                                    <option value="" >Singapore</option>
                                                    @foreach (App\Models\Country::all() as $Country)
                                                        <option {{ $Country->id == $ship->country_ship ? 'selected': ''}} value="{{$Country->id}}">{{$Country->name}}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label style="float: left">Address*</label>
                                                <input type="text" class="form-control" name="address_ship" value="{{ $ship->address_ship }}">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">City*</label>
                                                <input type="text" class="form-control" name="city_ship" value="{{ $ship->city_ship }}">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">State*</label>
                                                <input type="text" class="form-control" name="state_ship" value="{{ $ship->state_ship }}"">
                                            </div>
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Zip Code*</label>
                                                <input type="text" class="form-control" name="zip_ship" value="{{ $ship->zip_ship }}">
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <!-- Cart Total -->
                <div class="col-12 mb-60 mt-5">
                    <h3 style="margin-top:30px;">Cart Total</h3>
                    <div class="checkout-cart-total">
                        <h4>Product <span>Total</span></h4>
                        @php $sub_total = 0 @endphp
                        @foreach (App\Models\Cart::get() as $cart)
                        <?php $sub_total += $cart->total ?>
                        <ul>
                            <li><img src="{{ $cart->product_image }}" style="width: 75px; height:100px;"></li>
                            <li>{{ $cart->product_name }} <span>${{ $cart->total }}</span></li>
                        </ul>
                        @endforeach
                        <p>Sub Total <span>${{ $sub_total }}</span></p><hr>
                        <input type="hidden" value="{{ $sub_total }}" id="sub_total">
                        <p>Coupon Code<span></span></p><hr>
                        <select class="shipCharge" width=200 style="width: 100px; color:black;">
                            <option value='' selected>Select Shipping</option>
                            <option value='1'>Local Shipping</option>
                            <option value='2'>Express Local Shipping </option>
                            <option value='3'>Self Collection</option>
                        </select><p ><span class="ship5"></span></p><hr>
                        <div class="clearfix"></div>
                        <p >Total <span class="tot"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row">
                <div class="col-12 mb-60 mt-5">
                    <h3 style="margin-top:30px;">Payment Method</h3>
                    <div class="checkout-payment-method">
                        <div class="single-method">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Google Pay</label>
                            <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                        <div class="single-method">
                            <input type="radio" id="payment_paypal" name="payment-method" value="paypal">
                            <label for="payment_paypal">Paypal</label>
                            <p data-method="paypal">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                        <div class="single-method">
                            <input type="radio" id="payment_cash" name="payment-method" value="cash">
                            <label for="payment_cash">Cash on Delivery</label>
                            <p data-method="cash">Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="shipping-btn ">
        <a href="#" data-amount="1280" data-id="3" class="btn order_now"><span>Continue To Payment</span></a> &nbsp;
        <a href="{{ route('checkout') }}">Return to information</a>
    </div>
    </div>
</div>
<!--Contact section end-->

@endsection
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
@section('javascript')
<script>
    $(document).ready({
        $('#ship2').on('submit', '#ship2', function(e){
            e.PreventDefault();
            var url = $(this).attr('action');
            var method = $(this).attr('method');

            $.ajax({
                type: method,
                url: url,
                data: $(this).serialize(),
                success: function(data)
                {

                }
            });

        });

    });
</script>
<script>
     $('.shipCharge').change(function(){
            var ship = ($(this).val());
            if(ship==1){
                var sub = $('#sub_total').val();
                if(sub >= 250){
                    var a = 0;
                    $('.ship5').html('$'+a);
                    var e = parseInt(sub) + parseInt(a);
                    $('.tot').html('$'+sub);
                }
                else{
                    var b = 20;
                    $('.ship5').html('$'+b);
                    var c = parseInt(sub) + parseInt(b);
                    $('.tot').html('$'+c);
                }
            }
            else if(ship==2){

            }
            else{
                var sub = $('#sub_total').val();
                var d = 0;
                $('.ship5').html('$'+d);
                var f = parseInt(sub) + parseInt(d);
                $('.tot').html('$'+f);
            }
        });
</script>
@endsection
