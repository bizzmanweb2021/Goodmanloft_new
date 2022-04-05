@extends('Frontend.layouts.master')
@section('content')
 <!-- Page Banner Section Start -->
 {{-- <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png"> --}}
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h2>About us</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li> About us</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
{{-- </div> --}}
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
<!--About Us Area Start-->
<div class="about-us-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container-fluid">
        <div class="row">
            @foreach (App\Models\AboutUs::orderBy('id')->get() as $item )
            <div class="col-md-6">
                    <!--About Us Image Start-->
                <div class="about-us-img-wrapper">
                    <div class="about-us-image">
                        <a href="#"><img src="{{ $item->Image }}" alt="" style="height:300px; width:1170px;"></a>
                    </div>
                </div>
                <!--About Us Image End-->
                </div>
                <div class="col-md-6">
                    <!--About Us Content Start-->
                <div class="about-us-content">
                   <h4>{{ $item->Title }}</h4>
                   <p style="text-align: justify">{{ $item->Description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
