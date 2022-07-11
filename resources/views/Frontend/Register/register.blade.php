@extends('Frontend.layouts.master')
@section('content')
 <!-- Page Banner Section Start -->
        <!-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> -->
            <div class="container">

            </div>
        </div>
        <!-- Page Banner Section End -->

<!-- this is login section-->
<div class="container">
    <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-5">
            <div class="login-form" style="background-image: url(assets/images/register-banner.jpg); background-repeat: no-repeat; height: 720px; padding: 100px 20px;">
                <h2 class="text-center">Register </h2>
                <form action="{{ route("register") }}" method="POST">
                    @csrf
                    <div class="form-fild">
                        <p><label>Name<span class="required">*</span></label></p>
                        <input name="name" value="{{ old('name') }}" type="text">
                    </div>
                    @error('name')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                    <div class="form-fild">
                        <p><label>Email<span class="required">*</span></label></p>
                        <input name="email" value="{{ old('email') }}" type="email">
                    </div>
                    @error('email')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                    <div class="form-fild">
                        <p><label>Phone<span class="required">*</span></label></p>
                        <input name="phone" value="{{ old('phone') }}" type="text">
                    </div>
                    @error('phone')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                    <div class="form-fild">
                        <p><label>Password <span class="required">*</span></label></p>
                        <input name="password" value="" type="password">
                    </div>
                    @error('password')
                    <span style="color: red">{{ $message }}</span>
                @enderror
                    <div class="form-fild">
                        <p><label> Retype Password <span class="required">*</span></label></p>
                        <input name="password_confirmation" value="" type="password">
                    </div>
                    @error('password_confirmation')
                    <span style="color: red">{{ $message }}</span>
                @enderror
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
