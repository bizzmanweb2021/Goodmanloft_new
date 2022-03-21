@extends('Frontend.layouts.master')
@section('content')
{{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
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
{{-- </div> --}}
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
<!--My Account section start-->
<div class="my-account-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50" style="background-image: url(assets/images/my-account-background.png);background-size: cover; background-repeat: repeat;">
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

                            <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
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
                                        <p>Hello, <strong>Jhon Doe</strong> (If Not <strong>Tuntuni !</strong><a href="login-register.html" class="logout"> Logout</a>)</p>
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
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Coconut Oil</td>
                                                <td>Aug 22, 2022</td>
                                                <td>Pending</td>
                                                <td>$45</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Multani Mati</td>
                                                <td>July 22, 2022</td>
                                                <td>Approved</td>
                                                <td>$100</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Murikhete Paris</td>
                                                <td>June 12, 2021</td>
                                                <td>On Hold</td>
                                                <td>$99</td>
                                                <td><a href="cart.html" class="btn">View</a></td>
                                            </tr>
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
                                        <p><strong>Jhon Doe</strong></p>
                                        <p>1355 Market St, Suite 900 <br>
                                           Singapore, CA 94103</p>
                                        <p>Mobile: (123) 456-7890</p>
                                    </address>

                                    <a href="#" class="btn d-inline-block edit-address-btn"><i class="fa fa-edit"></i>Edit Address</a>
                                </div>
                            </div>
                            <!-- Single Tab Content End -->

                            <!-- Single Tab Content Start -->
                            <div class="tab-pane fade" id="account-info" role="tabpanel">
                                <div class="myaccount-content">
                                    <h3>Account Details</h3>

                                    <div class="account-details-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="first-name" placeholder="First Name" type="text">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="last-name" placeholder="Last Name" type="text">
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <input id="display-name" placeholder="Display Name" type="text">
                                                </div>

                                                <div class="col-12 mb-30">
                                                    <input id="email" placeholder="Email Address" type="email">
                                                </div>

                                                <div class="col-12 mb-30"><h4>Password change</h4></div>

                                                <div class="col-12 mb-30">
                                                    <input id="current-pwd" placeholder="Current Password" type="password">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="new-pwd" placeholder="New Password" type="password">
                                                </div>

                                                <div class="col-lg-6 col-12 mb-30">
                                                    <input id="confirm-pwd" placeholder="Confirm Password" type="password">
                                                </div>

                                                <div class="col-12">
                                                    <button class="save-change-btn">Save Changes</button>
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
