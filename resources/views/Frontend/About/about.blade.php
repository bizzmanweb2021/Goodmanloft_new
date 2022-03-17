@extends('Frontend.layouts.master')
@section('content')
 <!-- Page Banner Section Start -->
 <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
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
</div>
<!-- Page Banner Section End -->
<!--About Us Area Start-->
<div class="about-us-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                    <!--About Us Image Start-->
                <div class="about-us-img-wrapper">
                    <div class="about-us-image">
                        <a href="#"><img src="assets/images/about/about-us-banner1.jpg" alt="" style="height:300px; width:1170px;"></a>
                    </div>
                </div>
                <!--About Us Image End-->
                </div>
                <div class="col-md-6">
                    <!--About Us Content Start-->
                <div class="about-us-content">
                   <h4>About Goodman’s Loft</h4>
                   <p style="text-align: justify">Inspired by nature, Goodman’s loft embodies a raw and natural approach to your sacred living environment. The brand
                    represents the apotheosis of natural, handcrafted furniture as well as home accessories made from quality materials with a
                    clean, elegant and bohemian- inspired style. From sustainable rattan to reclaimed teakwood, every single item is beautifully
                    handmade by our trusted group of talented craftsmen and craftswomen.
                    Every single product in our curation is painstakingly handmade, so each piece has a character of its own. The slight
                    imperfections ensure that each piece has its own human touch and is just as perfect, if not better.
                    Shop online to view our entire collection or visit us at our showroom located one @pemimpin to see and feel our products
                    before you purchase!
                    </p>
                   {{-- <div class="signeture-image">
                       <img src="assets/images/about/about-us-signature.png" alt="">
                   </div> --}}
               </div>
               <!--About Us Content End-->
            </div>
        </div>
    </div>
</div>
<!--About Us Area End-->


<!-- Service Section Area Start -->
{{-- <div class="service-section section  pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Service Start -->
                <div class="single-service mb-30">
                    <div class="service-img">
                        <img src="{{ asset($about[1]['Image']) }}" alt="">
                    </div>
                    <div class="service-content">
                        <h4 class="title">{{ $about[1]['Title'] }}</h4>
                        <p>{{ $about[1]['Description'] }}</p>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Service Start -->
                <div class="single-service mb-30">
                    <div class="service-img">
                        <img src="{{ asset($about[2]['Image']) }}" alt="">
                    </div>
                    <div class="service-content">
                        <h4 class="title">{{ $about[2]['Title'] }}</h4>
                        <p>{{ $about[2]['Description'] }}</p>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <!-- Single Service Start -->
                <div class="single-service mb-30">
                    <div class="service-img">
                        <img src="{{ $about[3]['Image'] }}" alt="">
                    </div>
                    <div class="service-content">
                        <h4 class="title">{{ $about[3]['Title'] }}</h4>
                        <p>{{ $about[3]['Description'] }}</p>
                    </div>
                </div>
                <!-- Single Service End -->
            </div>
        </div>
    </div>
</div> --}}
<!-- Service Section Area End -->


@endsection
