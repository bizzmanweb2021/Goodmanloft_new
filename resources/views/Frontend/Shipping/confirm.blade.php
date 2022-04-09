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
                   <h4>Your Order is confirmed</h4>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
               </div>
               <div class="confirmation-box">
                <h4>Download Your Tickets</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Jhon Doe</h4>
                        <p>#145786</p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li><a href="#">Transfer</a></li>
                            <li><a href="#">PDF</a></li>
                            <li><a href="#"><img src="assets/images/apple-store.jpg" alt="" class="img-fluid" style="width: 100px;"></a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4">
                        <h4>Jhon Doe</h4>
                        <p>#145786</p>
                    </div>
                    <div class="col-md-8">
                        <ul>
                            <li><a href="#">Transfer</a></li>
                            <li><a href="#">PDF</a></li>
                            <li><a href="#"><img src="assets/images/apple-store.jpg" alt="" class="img-fluid" style="width: 100px;"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
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
                <div class="row">
                    <div class="col-md-9">
                        <img src="assets/images/product/10-100x133.jpg" alt="" style="width: 100px;">
                        <span class="px-4 text-dark">Product Name Goes Here</span>
                    </div>
                    <div class="col-md-3">
                        <p class="confirmation-price py-5 text-right text-dark">
                            $154.00
                        </p>
                    </div>
                </div>
               </div>
               <hr>
               <div class="confirmation-product">
                <div class="row">
                    <div class="col-md-9">
                        <img src="assets/images/product/10-100x133.jpg" alt="" style="width: 100px;">
                        <span class="px-4 text-dark">Product Name Goes Here</span>
                    </div>
                    <div class="col-md-3">
                        <p class="confirmation-price py-5 text-right text-dark">
                            $154.00
                        </p>
                    </div>
                </div>
               </div>
               <br>
               <hr>
               <div class="row">
                   <div class="col-md-6">
                       <h4>Subtotal</h4>
                   </div>
                   <div class="col-md-6">
                      <p class="text-right">$190.45</p>
                   </div>
               </div>
               <hr>
               <div class="row">
                <div class="col-md-6">
                    <h4>Tax</h4>
                </div>
                <div class="col-md-6">
                   <p class="text-right">$10.45</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h3>Total</h3>
                </div>
                <div class="col-md-6">
                   <p class="text-right text-dark">$245.00</p>
                </div>
            </div>
           </div>
       </div>
    </div>
</div>
<!--About Us Area End-->




@endsection
