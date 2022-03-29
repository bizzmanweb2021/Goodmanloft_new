@extends('Frontend.layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

@section('content')
{{-- <div class="page-banner-section section bg-image" data-bg="{{ asset('assets/images/inner-breadcum.png') }}"> --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-banner text-center">
                    <h2>Shop</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
{{-- </div> --}}
<!-- Shop Section Start -->
<div class="site-whatsapp">
    <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
  </div>
{{-- <div class="shop-section section" style="background-image: url(assets/images/shop-pattern.jpg); background-size: contain;"> --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="shop-area pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
                    <div class="row">
                        <div class="col-12">
                            <!-- Grid & List View Start -->
                            <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                <div class="grid-list-option d-flex">
                                        <ul class="nav">
                                        <li>
                                        <a class="active show" data-bs-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                        </li>

                                    </ul>
                                    <p>Showing 1–9 of 41 results</p>
                                    </div>
                                    <!--Toolbar Short Area Start-->
                                    {{-- <div class="toolbar-short-area d-md-flex align-items-center">
                                        <div class="toolbar-shorter ">
                                        <label>Sort By:</label>
                                            <select class="wide  testing" id="filter" >
                                                <option data-display="Select">Nothing</option>
                                                <option value="1">All</option>
                                                <option value="2">Price-low to high</option>
                                                <option value="3">Price-high to low</option>
                                                <option value="4">Newest</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <!--Toolbar Short Area End-->
                                    <input type="hidden" id="" value="">
                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <!-- Single Sidebar Start  -->
                            {{-- <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Product categories</h3>
                                <ul class="sidebar-list">
                                    <li><a href="#"><i class="ion-plus"></i>Accessories <span class="count">(14)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Decor <span class="count">(14)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Furniture <span class="count">(28)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Lighting <span class="count">(14)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Outdoor <span class="count">(14)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Sports <span class="count">(13)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Storage <span class="count">(9)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Toys <span class="count">(9)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Uncategorized <span class="count">(0)</span></a></li>
                                </ul>
                            </div> --}}
                            <!-- Single Sidebar End  -->
                            <!-- Single Sidebar Start  -->
                            {{-- <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Filter by price</h3>
                                <div class="sidebar-price">
                                    <div id="price-range" class="mb-20"></div>
                                    <button type="button" class="btn">Filter</button>
                                    <input type="text" id="price-amount" class="price-amount" readonly>
                                </div>
                            </div> --}}
                            <!-- Single Sidebar End  -->
                            <!-- Single Sidebar Start  -->
                            <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Filter by</h3>
                                <ul class="sidebar-list">
                                    <li><a href="#"><i class="ion-plus"></i>Gold <span class="count">(1)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>Green <span class="count">(1)</span></a></li>
                                    <li><a href="#"><i class="ion-plus"></i>White <span class="count">(1)</span></a></li>
                                </ul>
                            </div>
                            <!-- Single Sidebar End  -->
                            <!-- Single Sidebar Start  -->
                            {{-- <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Compare Products</h3>
                                <div class="compare-products-list">
                                    <ul>
                                        <li>
                                            <a href="#" class="title">Cras neque metus</a>
                                            <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>
                                        </li>
                                        <li>
                                            <a href="#" class="title">Cras neque metus</a>
                                            <a href="#" class="remove-compare"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <a href="#" class="clear-btn">Clear all</a>
                                    <button type="button" class="btn compare-btn">Compare</button>
                                </div>
                            </div> --}}
                            <!-- Single Sidebar End  -->

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
                                                                        <div class="product-label">
                                                                            <span class="sale">Sale</span>
                                                                            <span class="new">New</span>
                                                                        </div>
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
                            <div class="row mb-30 mb-sm-40 mb-xs-30">
                                <div class="col">
                                    <ul class="page-pagination">
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">05</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
<!-- Shop Section End -->
{{-- @section('javascript')


<script>
    $('.testing').change(function(){
        if($(this).val()== '1')
        {
            $.ajax({
                url: {{ route('filter.all') }},
                data:
            })
        }
    });


</script>
@endsection --}}
@endsection
