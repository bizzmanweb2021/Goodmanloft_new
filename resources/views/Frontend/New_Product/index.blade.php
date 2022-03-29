@extends('Frontend.layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>New Products</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>New Products</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="shop-area pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Filter by</h3>
                                <ul class="sidebar-list">
                                    <li><a href="#"><i class="ion-plus"></i>Gold <span class="count">(1)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Green <span class="count">(1)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>White <span class="count">(1)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 order-lg-2 order-1">
                            <div class="row">
                                <div class="col-12">
                                    <div class="shop-product">
                                        <div id="myTabContent-2" class="tab-content">
                                            <div id="grid" class="tab-pane fade active show">
                                                <div class="product-grid-view">
                                                    <div class="row">
                                                        {{-- @if(count($products) > 0) --}}
                                                        @foreach ($product as $products )
                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <a href="#">
                                                                <div class="single-grid-product mb-30">
                                                                    <div class="product-image">
                                                                        {{-- <div class="product-label">
                                                                            <span class="sale">Sale</span>
                                                                            <span class="new">New</span>
                                                                        </div> --}}
                                                                        <a href="{{ route('productShow',$products->id) }}">
                                                                            <img src="{{ asset($products->product_image) }}" class="img-fluid" alt="">
                                                                        </a>
                                                                        <div class="product-action d-flex justify-content-between">
                                                                            <a class="product-btn" href="{{ route('add.wish',$products->id) }}">Add to Cart</a>
                                                                            <ul class="d-flex">
                                                                                <li><a href="{{ route('wishlistShow',$products['id']) }}"><i class="ion-android-favorite-outline"></i></a></li>
                                                                                <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <div class="product-category-rating">
                                                                            <span class="category"><a href="#">{{ $products->product_name }}</a></span>
                                                                            <span class="rating">
                                                                            <i class="ion-android-star active"></i>
                                                                            <i class="ion-android-star active"></i>
                                                                            <i class="ion-android-star active"></i>
                                                                            <i class="ion-android-star active"></i>
                                                                            <i class="ion-android-star-outline"></i>
                                                                        </span>
                                                                        </div>

                                                                        <p class="product-price"><span class="discounted-price">${{ $products->Price }}</span> <span class="main-price discounted">${{ $products->Price }}</span></p>
                                                                        <p class="text-success" style="color:#2ebe2c">{{ $products->stock_availability }}</p>
                                                                    </div>
                                                                </div>
                                                            <!--  Single Grid product End -->
                                                            </a>

                                                        </div>
                                                        @endforeach
                                                        {{-- @endif --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
