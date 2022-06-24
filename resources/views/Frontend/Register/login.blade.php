@extends('Frontend.layouts.master')
@section('content')
  
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
            @error('email')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <div class="form-fild">
                <p><label>Password <span class="required">*</span></label></p>
                <input name="password" value="" type="password">
            </div>
            @error('password')
            <span style="color: red">{{ $message }}</span>
        @enderror
            <div class="login-submit">
                <button type="submit" class="btn btn-block" style="width: 100%; background-color: #bf9f6c;">Login</button>

            </div>
            <div class="row">

                <div class="col-md-6">
                    <span class="lost-password">
                        <a href="{{ route('register') }}">Sign Up</a>
                    </span>
                </div>
            </div>
            <label style="width: 100%;">
                <div class="row">
                    <div class="col-md-6">
                        <input class="checkbox" name="rememberme" value="" type="checkbox">
                        <span>Remember me</span>
                    </div>
                    <div class="col-md-6">
                   
                        <span class="lost-password text-right pull-right">
                            <a href="{{ route('ForgetPasswordGet') }}">{{ __('Forgot Your Password?') }}</a>
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


