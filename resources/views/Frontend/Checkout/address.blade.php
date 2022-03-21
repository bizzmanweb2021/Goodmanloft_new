@extends('Frontend.layouts.master')
@section('content')
<!-- Page Banner Section Start -->
{{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
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
{{-- </div> --}}
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
                <div class="row row-40">


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

            </div>
        </div>
    </div>
</div>
<!--Checkout section end-->

@endsection
