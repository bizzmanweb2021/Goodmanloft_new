@extends('Frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h2>My Account</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>My Account</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
</div>
<!--My Account section start-->
<div class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50" >
    <div class="container sb-border pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <!-- My Account Tab Menu Start -->
                    <div class="col-lg-3 col-12">
                        <div class="myaccount-tab-menu nav" role="tablist">
                            <a href="#dashboad" class="active" data-bs-toggle="tab"><i class="fa fa-dashboard"></i>
                                Dashboard</a>

                            <a href="#orders" data-bs-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>

                            <a href="#address-edit" data-bs-toggle="tab"><i class="fa fa-map-marker"></i> address</a>

                            <a href="#account-info" data-bs-toggle="tab"><i class="fa fa-user"></i> Account Details</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> LogOut</a>
                        </div>
                    </div>
                    <!-- My Account Tab Menu End -->

                    <!-- My Account Tab Content Start -->
                    <div class="col-lg-9 col-12">
                        <div class="tab-content" id="myaccountContent">
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Dashboard</h3>
                                    <div class="welcome mb-20">
                                        <p>Hello, <strong>{{ Auth::user()->name }}</strong> (If Not <strong>Tuntuni !</strong><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"> Logout</a>)</p>
                                    </div>
                                    <p class="mb-0">From your account dashboard. you can easily check &amp; view your
                                        recent orders, manage your shipping and billing addresses and edit your
                                        password and account details. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda ab rem velit, quaerat adipisci dolore iusto, sit excepturi maiores eum nam deserunt doloribus. Modi quaerat perspiciatis, fugiat dolores odio facilis.</p>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="orders" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Orders</h3>
                                    <div class="myaccount-table table-responsive text-center">
                                        <table class="table table-bordered">
                                            <thead class="thead-light">
                                            <tr>
                                                <!-- <th>No</th> -->
                                                <th>S.No</th>
                                                <th>Product Name</th>
                                                <th>Product Image</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                                <th>Date</th>
                                               
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
                                                <td>{{ $cart->product_name }}</td>
                                                <td><img src="{{ $cart->product_image }}"></td>  
                                                <td>{{ $cart->quantity }}</td>
                                                <td>${{ ($cart->price - ($cart->price*($cart->discount/100))) *  $cart->quantity }}</td>
                                                <td>{{ $cart->updated_at }}</td>
                                                
                                            </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Billing Address</h3>
                                    <address>
                                        @foreach (App\Models\Billing_address::orderBy('id','desc')->limit(1)->get() as $ship)
                                        <p>Full Name-<strong>{{ $ship->full_name }}</strong></p>
                                        <p>Address-{{ $ship->address }},<br>City-{{ $ship->city }},<br>State- {{ $ship->state }},<br>
                                        Country-{{ $ship->country }}, <br>Zip-{{ $ship->zip }}</p>
                                        <p>Phone-{{ $ship->phone }}</p>
                                        @endforeach
                                    </address>
                                    <a href="{{ route('checkout') }}"" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>
                                    <div class="account-details-form">
                                        <form action="{{ route('update.address') }}" method="POST" id="add2">
                                            @csrf
                                            <div class="row">
                                                <input type="hidden" id="add1" name="add1" value="{{ Auth::user()->id }}">
                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="name" name="name" placeholder="First Name" type="text" value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="phone" name="phone" placeholder="Phone No." type="text" value="{{ Auth::user()->phone }}">
                                                </div>
                                                <div class="col-12 mb-30">
                                                    <input id="email" name="email" placeholder="Email Address" type="email" value="{{ Auth::user()->email }}">
                                                </div>
                                                <div class="col-12 mb-30"><h4>Password change</h4></div>
                                                <div class="col-12 mb-30">
                                                    <input id="password" name="password" placeholder="Current Password" type="password" >
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit" class="save-change-btn">Save Changes</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->
                        </div>
                    </div>
                    <!-- My Account Tab Content End -->
                </div>

            </div>

        </div>
    </div>
</div>
<!--My Account section end-->
@endsection
@section('javascript')
<script>
    $(document).ready({
        $('#add2').on('submit', '#add2', function(e){
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
@endsection
