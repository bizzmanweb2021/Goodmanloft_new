@extends('Frontend.layouts.master')
@section('content')
<!-- Page Banner Section Start -->
{{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
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
{{-- </div> --}}
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
                                                {{-- <input type="text" class="form-control" name="country_ship" value="{{ $ship->country_ship }}" > --}}
                                                <select id="country_ship" name="country_ship" class="form-control w-100" >
                                                    <option value="" >--Select--</option>
                                                    @foreach (App\Models\Country::all() as $Country)
                                                        <option {{ $Country->id == $ship->country_ship ? 'selected': ''}} value="{{$Country->id}}">{{$Country->name}} - {{$Country->code}}</option>

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
                                            <div class="col-md-12 col-12 mb-20">
                                                <label style="float: left">Address Type*</label>
                                                <select class="nice-select form-control" name="address_type_ship">

                                                    <option {{ 'Home' == $ship->address_type_ship ? 'selected': ''}} value="Home">Home(7am - 7pm)</option>
                                                    <option {{ 'Office' == $ship->address_type_ship ? 'selected': ''}} value="Office">Office(9am - 6pm)</option>
                                                </select>
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
         <div class="col-md-7">
            <div class="shipping-option">

                <h3>Shipping Method</h3>

               @foreach (App\Models\DeliveryRate::all() as $del)

                <div class="shipping-option-mode">
                   <div class="row">
                       <div class="col-md-10">
                           <div class="single-method">
                               <input type="radio" id="payment_check" name="payment-method" value="check">
                               <label for="payment_check">Delivery Rate</label>
                           </div>
                       </div>
                       <div class="col-md-2">
                            <div class="shipping-payment">
                                <h4>${{ $del->rate }}</h4>
                            </div>
                       </div>
                   </div>
                </div>

                @endforeach
            </div>
         </div>
         <div class="col-lg-5">
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
                            <li>{{ $cart->product_name }} <span>${{ $cart->total }}</span></li>
                        </ul>
                        @endforeach
                        <p>Sub Total <span>${{ $sub_total }}</span></p>

                        @if ( $sub_total >= 250)
                        @php $del = 0 @endphp
                            <p>Delivery Rate <span>${{ $del }}</span></p>
                            <?php $tot = $sub_total + $del ?>
                            <p>Total<span>${{ $tot }}</span></p>
                        @else
                        @php $del = 20 @endphp
                            <p>Delivery Rate <span>${{ $del }}</span></p>
                            <?php $tot = $sub_total + $del ?>
                            <p>Total<span>${{ $tot }}</span></p>

                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>

     <br>
     <div class="shipping-btn ">
        <a href="javascript:void(0)" data-amount="1280" data-id="3" class="btn order_now"><span>Continue To Payment</span></a> &nbsp;
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
        var SITEURL = '{{URL::to('')}}';
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });
        $('body').on('click', '.buy_now', function(e){
        var totalAmount = $(this).attr("data-amount");
        var product_id =  $(this).attr("data-id");
        var options = {
        "key": "rzp_test_jOCPSrfkSUVcWD",
        "amount": (totalAmount*100), // 2000 paise = INR 20
        "name": "Tutsmake",
        "description": "Payment",
        "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
        "handler": function (response){
        window.location.href = SITEURL +'/'+ 'paysuccess?payment_id='+response.razorpay_payment_id+'&product_id='+product_id+'&amount='+totalAmount;
        },
        "prefill": {
        "contact": '9988665544',
        "email":   'tutsmake@gmail.com',
        },
        "theme": {
        "color": "#528FF0"
        }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
        e.preventDefault();
        });
    });
</script>
@endsection
