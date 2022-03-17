@extends('frontend.layouts.master')
@section('content')
   <!-- Page Banner Section Start -->
   <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
    <div class="container">

    </div>
</div>
<!-- Page Banner Section End -->

<!-- this is login section-->
<div class="container">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-5">
    <div class="login-form" style="background-image: url(assets/images/register-banner.jpg);  background-repeat: no-repeat; padding: 120px 30px;">
        <h2 class="text-center">Sign In</h2>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-fild">
                <p><label>Username or email address <span class="required">*</span></label></p>
                <input name="email" value="" type="text">
            </div>
            <div class="form-fild">
                <p><label>Password <span class="required">*</span></label></p>
                <input name="password" value="" type="password">
            </div>
            <div class="login-submit">
                <button type="submit" class="btn btn-block" style="width: 100%; background-color: #bf9f6c;">Login</button>

            </div>
            <label style="width: 100%;">
                <div class="row">
                    <div class="col-md-6">
                        <input class="checkbox" name="rememberme" value="" type="checkbox">
                        <span>Remember me</span>
                    </div>
                    <div class="col-md-6">
                        <span class="lost-password text-right pull-right">
                            <a href="#">Lost your password?</a>
                        </span>
                    </div>
                </div>


            </label>

        </form>
    </div>
</div>
<div class="col-md-3"></div>
</div>
</div>
@endsection


