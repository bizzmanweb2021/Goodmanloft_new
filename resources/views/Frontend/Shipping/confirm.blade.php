@extends('Frontend.layouts.master')
@section('content')
<!--About Us Area Start-->
<div class="about-us-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container">
       <div class="row">
           <div class="col-md-6">
               <div class="confirmation-check">
                   <img src="assets/images/checked.png" alt="" class="img-fluid" style="width: 50px;">
                   <span>Jhon Doe</span>
               </div>

               <div class="confirmation-box">
                   <div class="row">
                       <div class="col-md-10">
                       <h4>Your Order is confirmed</h4>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
              </div>
            <div class="col-md-2">
                <img src="assets/images/check.png" alt="" class="img-fluid" style="width:30px;">
            </div>
            </div>
          </div>&nbsp;&nbsp;
               
            </div>
            <div class="row">
                <div class="col-md-6">
            <div class="myaccount-content" style="border: 1px solid #e3e3e3;">
                <h3>Billing Address</h3>

                <address>
                    <p><strong>Jhon Doe</strong></p>
                    <p>1355 Market St, Suite 900 <br>
                       Singapore, CA 94103</p>
                    <p>Mobile: (123) 456-7890</p>
                </address>

                <a href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
            </div>
           </div>
           <div class="col-md-6 bg-gray">
               <div class="confirmation-product">
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
                                        <p>Tax
                                            <span class="badge badge-secondary" style="float: none; color:black;">
                                            <a data-bs-toggle="modal" data-bs-target="#myModal"></a>
                                        </span><span  style="opacity: 0.8;">0</span></p>
                                        <p>Total<span>${{ $sub_total }}
                                            <!-- <input type="text" style="background-color: white; width:120px; height:40px;"> -->
                                        </span></p>
                                        <div class="modal" id="myModal">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h1 class="modal-title">Shipping Policy</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                      </div>
</div>
    </div>
</div>
</div>
</div>
<!--About Us Area End-->




@endsection
