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
            <div class="login-form" style="background-image: url(assets/images/register-banner.jpg); background-repeat: no-repeat; height: 700px; padding: 100px 20px;">
                <h2 class="text-center">Register</h2>
                <form action="{{ route("register") }}" method="POST">
                    @csrf
                    <div class="form-fild">
                        <p><label>Name<span class="required">*</span></label></p>
                        <input name="name" value="" type="text">
                    </div>
                    <div class="form-fild">
                        <p><label>Email<span class="required">*</span></label></p>
                        <input name="email" value="" type="email">
                    </div>
                    <div class="form-fild">
                        <p><label>Phone*</label></p>
                        <input name="phone" value="" type="text">
                    </div>
                    <div class="form-fild">
                        <p><label>Password <span class="required">*</span></label></p>
                        <input name="password" value="" type="password">
                    </div>
                    <div class="form-fild">
                        <p><label> Retype Password <span class="required">*</span></label></p>
                        <input name="password_confirmation" value="" type="password">
                    </div>
                    <div class="login-submit">
                        <button type="submit" class="btn btn-block" style="width: 100%; background-color: #bf9f6c;">Sign up</button>
                    </div>
                    <label style="width: 100%;">
                        <div class="row">

                            <div class="col-md-6">
                                <span class="lost-password">
                                    <a href="/login">Already Have Account?</a>
                                </span>
                            </div>
                        </div>
                    </label>
                </form>
            </div>
        </div>
        <div class="col-md-"></div>
    </div>
</div>
@endsection
