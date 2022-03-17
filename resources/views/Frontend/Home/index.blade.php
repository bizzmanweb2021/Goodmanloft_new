@extends('Frontend.layouts.master_home')
@section('content')

<div class="site-banner">
    <div class="banner-logo">
        <a href="{{ route('user.index') }}"><img src="{{ url('/') }}/assets/images/logo.png" alt="" class="img-fluid"></a>
    </div>
    <ul>
        <li><a href="#"> <img src="{{ url('/') }}/assets/images/icons/icons8-table-80.png" alt="" class="img-fluid"><span>Furniture</span> </a></li>
        <li><a href="#"> <img src="{{ url('/') }}/assets/images/icons/icons8-salad-bowl-80.png" alt="" class="img-fluid"><span>Kitchenware</span> </a></li>
        <li><a href="#"> <img src="{{ url('/') }}/assets/images/icons/icons8-cushion-80.png" alt="" class="img-fluid"> <span>Accessories</span> </a></li>
        <li><a href="#"> <img src="{{ url('/') }}/assets/images/icons/icons8-bed-80.png" alt="" class="img-fluid"> <span>Bed, Bath & Body</span> </a></li>
    </ul>
    <div class="clearfix"></div>
    <h2>nature’s living sanctuary</h2>
    @php
        $obj = App\Models\category::first();
    @endphp
    <div class="explore-btn">
        <a href="{{ route('product_show',$obj->id) }}">Explore Now</a>

    </div>

</div>

<div class="container">
    <div class="scroll-down">
        <div class="chevron"></div>
        <div class="chevron"></div>
        <div class="chevron"></div>
    </div>


  </div>
        <div class="product-section sb-border section pb-75 pt-45 pt-lg-25 pt-md-15 pt-sm-5 pt-xs-0">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-title text-left  pt-20">
                            <h2>Featured<span>Products</span> </h2>

                        </div>
                    </div>
                </div>
            </div>
                <div class="product-bg-pattern">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-4 col-sm-6 ">
                                @if (!empty($product[4]['id']))
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product[4]['id']) }}" tabindex="0">
                                            <img src=" {{ asset($product[4]['product_image']) }}" class="img-fluid" alt="" >
                                        </a>

                                        <div class="product-action d-flex justify-content-between">
                                                <input type="hidden" value="{{ $product[4]['id'] }}" name="id">
                                                <input type="hidden" value="{{ $product[4]['product_name'] }}" name="name">
                                                <input type="hidden" value="{{ $product[4]['Price'] }}" name="price">
                                                <input type="hidden" value="{{ $product[4]['product_image'] }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">


                                                <a class="product-btn" href="{{ route('add.wish',$product[4]['id']) }}" tabindex="0">Add to Cart</a>

                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product[4]['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-rating">
                                            <span class="category"><a href="shop.html" tabindex="0"></a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="title"> <a href="{{ route('productShow',$product[4]['id']) }}" tabindex="0">{{($product[0]['product_name']) }}</a></h3>
                                                <p class="product-price"><span class="discounted-price">{{($product[4]['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>

                                    </div>
                                </div>
                                @endif
                                @if(!empty($product[2]['id']))
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product[2]['id']) }}" tabindex="0">
                                            <img src="{{ asset($product[2]['product_image']) }}" class="img-fluid" alt="">
                                        </a>

                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="{{ route('add.wish',$product[2]['id']) }}" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product[2]['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-rating">
                                            <span class="category"><a href="shop.html" tabindex="0"></a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>

                                        <h3 class="title"> <a href="{{ route('productShow',$product[2]['id']) }}" tabindex="0">{{($product[1]['product_name']) }}</a></h3>
                                        <p class="product-price"><span class="discounted-price">{{($product[2]['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <div class="col-md-4 col-sm-6 ">
                                @if(!empty($product[3]['id']))
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product[3]['id']) }}" tabindex="0">
                                            <img src="{{ asset($product[3]['product_image']) }}" class="img-fluid" alt="">
                                        </a>

                                        <div class="product-action d-flex justify-content-between">

                                                <a class="product-btn" href="{{ route('add.wish',$product[3]['id']) }}" tabindex="0">Add to Cart</a>

                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product[3]['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-rating">
                                            <span class="category"><a href="shop.html" tabindex="0"></a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <h3 class="title"> <a href="single-product.html" tabindex="0">{{($product[3]['product_name']) }}</a></h3>
                                        <p class="product-price"><span class="discounted-price">{{($product[3]['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-4 col-sm-6 ">
                                @if(!empty($product[1]['id']))
                                <div class="single-grid-product mb-40 ">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product[1]['id']) }}" tabindex="0">
                                            <img src="{{ asset($product[1]['product_image']) }}" class="img-fluid" alt="">
                                        </a>

                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="{{ route('add.wish',$product[1]['id']) }}" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product[1]['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-rating">
                                            <span class="category"><a href="shop.html" tabindex="0"></a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <h3 class="title"> <a href="single-product.html" tabindex="0">{{($product[1]['product_name']) }}</a></h3>
                                        <p class="product-price"><span class="discounted-price">{{($product[1]['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                @endif
                                @if(!empty($product[0]['id']))
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">-20%</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product[0]['id']) }}" tabindex="0">
                                            <img src="{{ asset($product[0]['product_image']) }}" class="img-fluid" alt="">
                                        </a>
                                        <div class="product-action d-flex justify-content-between">
                                            <a class="product-btn" href="{{ route('add.wish',$product[0]['id']) }}" tabindex="0">Add to Cart</a>
                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product[0]['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                <li><a href="#" tabindex="0"><i class="ion-ios-shuffle"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-category-rating">
                                            <span class="category"><a href="#" tabindex="0"></a></span>
                                            <span class="rating">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <h3 class="title"> <a href="#" tabindex="0">{{($product[0]['product_name']) }}</a></h3>
                                        <p class="product-price"><span class="discounted-price">{{($product[0]['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        {{-- <div class="newsletter-popup-area" id="newsletter-popup-area">
            <div class="newsletter-popup-content-wrapper">
                <div class="newsletter-popup-content text-center" style="width:60%">
                    <a href="javascript:void(0)" class="close-newsletter-popup" id="close-newsletter-popup">Close</a>
                    <a href="{{ route('festive') }}"><img src="{{ asset('assets/images/discount.jpg') }}"/></a>
                </div>
            </div>
        </div> --}}
        <!--Banner section start-->
        <div class="banner-section section pt-45 pt-lg-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner-item mb-30">
                            <div class="banner-image">
                                <a href="shop.html">
                                    <img src="{{ url('/') }}/assets/images/banner/home3-banner5.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner-item mb-30">
                            <div class="banner-image">
                                <a href="shop.html">
                                    <img src="{{ url('/') }}/assets/images/banner/home3-banner6.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Banner section end-->

        <!-- List Product Section Start -->
        <div class="list-product-section section pt-80 pt-lg-60 pt-md-50 pt-sm-40 pt-xs-20">
            <div class="container sb-border  pb-75 pb-lg-55 pb-md-45 pb-sm-35 pb-xs-25">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <!--  Product List Widget Wrapper -->
                        <div class="product-list-widget-wrapper">
                            <!-- widget product list title -->
                            <div class="list-product-section-title mb-35">
                                <h3>Sale <span>50%</span></h3>
                                <div class="on-sale-nav slick-btns"></div>
                            </div>
                            <!-- widget product list title -->

                            <!--  widget product list wrapper -->
                            <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "infinite": true,
                                        "arrows": true,
                                        "rows": 1,
                                        "appendArrows": ".on-sale-nav",
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                        }' data-slick-responsive='[
                                        {"breakpoint":1199, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":576, "settings": {
                                        "slidesToShow": 1,
                                        "arrows": false,
                                        "autoplay": true
                                        }}
                                        ]'>
                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto" >
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/5-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html"></a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/6-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Sports</a></span>
                                        <h3 class="title"> <a href="single-product.html">Pellentesque posuere
                                                hendrerit</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$58.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto" >
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/7-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Toys</a></span>
                                        <h3 class="title"> <a href="single-product.html">Auctor gravida enim</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$48.00</span> <span
                                                class="main-price discounted">$78.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->



                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/9-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Furniture</a></span>
                                        <h3 class="title"> <a href="single-product.html">Sit voluptatem rhoncus sem</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$70.00</span> <span
                                                class="main-price discounted">$95.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/13-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Nullam maximus eget nisi</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$60.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/12-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$59.00</span> <span
                                                class="main-price discounted">$70.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/11-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Accessories</a></span>
                                        <h3 class="title"> <a href="single-product.html">Vestibulum suscipit sedt</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$90.00</span> <span
                                                class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/10-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                        <h3 class="title"> <a href="single-product.html">Donec eu libero ac dapibu</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$85.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->
                            </div>
                            <!-- End of widget product list wrapper -->
                        </div>
                        <!--  Product List Widget Wrapper -->

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!--  Product List Widget Wrapper -->
                        <div class="product-list-widget-wrapper">
                            <!-- widget product list title -->
                            <div class="list-product-section-title mb-35">
                                <h3>Latest <span>Arrivals</span></h3>
                                <div class="latest-nav slick-btns"></div>
                            </div>
                            <!-- widget product list title -->

                            <!--  widget product list wrapper -->
                            <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "infinite": true,
                                        "arrows": true,
                                        "rows": 1,
                                        "appendArrows": ".latest-nav",
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                        }' data-slick-responsive='[
                                        {"breakpoint":1199, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":576, "settings": {
                                        "slidesToShow": 1,
                                        "arrows": false,
                                        "autoplay": true
                                        }}
                                        ]'>
                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/9-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Furniture</a></span>
                                        <h3 class="title"> <a href="single-product.html">Sit voluptatem rhoncus sem</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$70.00</span> <span
                                                class="main-price discounted">$95.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/13-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Nullam maximus eget nisi</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$60.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/12-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$59.00</span> <span
                                                class="main-price discounted">$70.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/11-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Accessories</a></span>
                                        <h3 class="title"> <a href="single-product.html">Vestibulum suscipit sed</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$90.00</span> <span
                                                class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/10-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                        <h3 class="title"> <a href="single-product.html">Donec eu libero ac dapibus</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$85.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/5-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->



                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/7-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Toys</a></span>
                                        <h3 class="title"> <a href="single-product.html">Auctor gravida enim</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$48.00</span> <span
                                                class="main-price discounted">$78.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="single-product.html">
                                            <img src="{{ url('/') }}/assets/images/product/8-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Storage</a></span>
                                        <h3 class="title"> <a href="single-product.html">Kaoreet lobortis sagittis</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->
                            </div>
                            <!-- End of widget product list wrapper -->
                        </div>
                        <!--  Product List Widget Wrapper -->

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <!--  Product List Widget Wrapper -->
                        <div class="product-list-widget-wrapper">
                            <!-- widget product list title -->
                            <div class="list-product-section-title mb-35">
                                <h3>Top Rated <span> Products</span></h3>
                                <div class="top-rated-nav slick-btns"></div>
                            </div>
                            <!-- widget product list title -->

                            <!--  widget product list wrapper -->
                            <div class="widget-product-list-wrapper tf-element-carousel top-nav" data-slick-options='{
                                        "slidesToShow": 1,
                                        "slidesToScroll": 1,
                                        "infinite": true,
                                        "arrows": true,
                                        "rows": 1,
                                        "appendArrows": ".top-rated-nav",
                                        "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                        "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                        }' data-slick-responsive='[
                                        {"breakpoint":1199, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":992, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":768, "settings": {
                                        "slidesToShow": 1
                                        }},
                                        {"breakpoint":576, "settings": {
                                        "slidesToShow": 1,
                                        "arrows": false,
                                        "autoplay": true
                                        }}
                                        ]'>
                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/8-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Storage</a></span>
                                        <h3 class="title"> <a href="single-product.html">Kaoreet lobortis sagittis</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/9-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Furniture</a></span>
                                        <h3 class="title"> <a href="single-product.html">Sit voluptatem rhoncus sem</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$70.00</span> <span
                                                class="main-price discounted">$95.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/13-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Nullam maximus eget nisi</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$60.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/12-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$59.00</span> <span
                                                class="main-price discounted">$70.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/5-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Category</a></span>
                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$80.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/6-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Sports</a></span>
                                        <h3 class="title"> <a href="single-product.html">Pellentesque posuere
                                                hendrerit</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$58.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/7-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Toys</a></span>
                                        <h3 class="title"> <a href="single-product.html">Auctor gravida enim</a></h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$48.00</span> <span
                                                class="main-price discounted">$78.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/11-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Accessories</a></span>
                                        <h3 class="title"> <a href="single-product.html">Vestibulum suscipit sed</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$90.00</span> <span
                                                class="main-price discounted">$120.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->

                                <!--  single widget product -->
                                <div class="single-grid-product list-mode" style="height: auto">
                                    <div class="list-mode-image">
                                        <a href="#">
                                            <img src="{{ url('/') }}/assets/images/product/10-100x133.jpg" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="list-mode-content">
                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                        <h3 class="title"> <a href="single-product.html">Donec eu libero ac dapibus</a>
                                        </h3>
                                        <div class="product-category-rating">
                                            <span class="rating float-none">
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star active"></i>
                                                <i class="ion-android-star-outline"></i>
                                            </span>
                                        </div>
                                        <p class="product-price"><span class="discounted-price">$85.00</span> <span
                                                class="main-price discounted">$100.00</span></p>
                                    </div>
                                </div>
                                <!--  single widget product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="header header-sticky d-none d-lg-block">
            <div class="header-default">
                <div class="container-fluid pl-115 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-115 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="header-nav d-flex justify-content-between align-items-center">
                                <div class="header-logo text-center">
                                    <a href="index.html"><img src="{{ url('/') }}/assets/images/logo.png" alt="" class="img-fluid"></a>
                                </div>
                                <nav class="main-menu main-menu-two">
                                    <ul>
                                        <li><a href="{{ route('user.index') }}">Home</a></li>
                                        <li><a href="#">New Products</a></li>
                                        <li><a href="#">Shop</a>
                                            <ul class="mega-menu four-column left-0">
                                                @foreach (App\Models\category::all() as $item )
                                                <li><a href="{{ route('product_show',$item->id) }}" class="item-link">{{ $item->Category_Name }}</a>
                                                    @foreach ( App\Models\subcategory::where('Category_id', $item->id)->get() as $data )
                                                    <ul>
                                                        <li><a href="{{ route('product_show',['id'=>$item->id,"sub_id"=>$data->id]) }}">{{  $data->SubCategory_Name }}</a></li>
                                                    </ul>
                                                    @endforeach
                                                </li>
                                                @endforeach

                                                {{-- <li><a href="#" class="item-link">
                                                    <img src="{{ url('/') }}/assets/images/sale-banner.jpg" alt="" class="img-fluid">
                                                </a>

                                                </li> --}}
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
                                            <li class=""><a href="{{ route('faq') }}">Faq</a>
                                            {{-- <ul class="sub-menu">
                                                <li><a href="{{ route('about.index') }}">About Us</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{ route('about.index') }}">About Goodman loft</a></li>
                                                <li><a href="#">Ratan Furniture</a></li>
                                                </ul>
                                                </li>
                                                <li><a href="{{ route('faq') }}">Frequently Asked</a></li>
                                            </ul> --}}
                                        </li>
                                        <li><a href="#">Promotions</a></li>
                                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div class="header-right_wrap d-flex">
                                    <div class="header-search">
                                        <button class="header-search-toggle"><i class="ion-ios-search-strong"></i></button>
                                        <div class="header-search-form">
                                            <form action="/search" method="POST" role="search">
                                                @csrf
                                                <input type="text" placeholder="Type and hit enter"  name="q">
                                                <button><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-cart">
                                        <a href="{{ route('cart.show') }}"><i class="fa fa-shopping-bag"></i><span class="cart-count">{{ App\Models\Cart::where('user_id',Auth::check()?Auth::user()->id:0)->count() }}</span></a>
                                        <!--Mini Cart Dropdown Start-->
                                        {{-- <div class="header-cart-dropdown"> --}}
                                            {{-- <ul class="cart-items">
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.html"><img src="{{ url('/') }}/assets/images/cart/cart-1.jpg"
                                                                alt="" class="img-fluid"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.html">Dell
                                                                Inspiron
                                                                24</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$278.00</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                                <li class="single-cart-item">
                                                    <div class="cart-img">
                                                        <a href="cart.html"><img src="{{ url('/') }}/assets/images/cart/cart-2.jpg"
                                                                alt="" class="img-fluid"></a>
                                                    </div>
                                                    <div class="cart-content">
                                                        <h5 class="product-name"><a href="single-product.html">Lenovo
                                                                Ideacentre
                                                                300</a></h5>
                                                        <span class="product-quantity">1 ×</span>
                                                        <span class="product-price">$23.39</span>
                                                    </div>
                                                    <div class="cart-item-remove">
                                                        <a title="Remove" href="#"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="cart-total">
                                                <h5>Subtotal :<span class="float-right">$39.79</span></h5>
                                                <h5>Eco Tax (-2.00) :<span class="float-right">$7.00</span></h5>
                                                <h5>VAT (20%) : <span class="float-right">$0.00</span></h5>
                                                <h5>Total : <span class="float-right">$46.79</span></h5>
                                            </div> --}}
                                            {{-- <div class="cart-btn">
                                                <a href="{{ route('cart.show') }}">View Cart</a>
                                                <a href="{{ route('checkout') }}">checkout</a>
                                            </div> --}}
                                        {{-- </div> --}}
                                        <!--Mini Cart Dropdown End-->
                                    </div>
                                    <ul class="ht-us-menu">
                                        @if(Auth::check())
                                        <li><a href="#"><i class="fa fa-user"></i></a>
                                            <ul class="ht-dropdown right">
                                                <li><a href="compare.html">Compare Products</a></li>
                                                <li><a href="{{ route('account') }}">My Account</a></li>
                                                <li><a href="{{ route('wish.show') }}">My Wish List</a></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">LogOut</a></li>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                </form>
                                            </ul>
                                        </li>
                                        @else
                                            <li><a href="{{ route('login') }}"><i class="fa fa-user"></i></a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="testimonial-section section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="testimonial-wrap testi-bg">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="testimonial-wrapper section-space--inner">
                                        <div class="tf-element-carousel" data-slick-options='{
                                                    "slidesToShow": 1,
                                                    "slidesToScroll": 1,
                                                    "infinite": true,
                                                    "arrows": false,
                                                    "dots": true
                                                    }' data-slick-responsive='[
                                                    {"breakpoint":768, "settings": {
                                                    "slidesToShow": 1
                                                    }},
                                                    {"breakpoint":575, "settings": {
                                                    "slidesToShow": 1
                                                    }}
                                                    ]'>
                                            <div class="item">
                                                <!-- single testimonial item Strat-->
                                                <div class="single-testimonial-item">
                                                    <div class="testimonial-image">
                                                        <img src="{{ url('/') }}/assets/images/testimonial/testimonial1.jpg"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img src="{{ url('/') }}/assets/images/icons/quote-icon.png" alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>
                                                        <span class="post">Customer</span>
                                                    </div>
                                                </div>
                                                <!-- single testimonial item End-->
                                            </div>
                                            <div class="item">
                                                <!-- single testimonial item Strat-->
                                                <div class="single-testimonial-item">
                                                    <div class="testimonial-image">
                                                        <img src="{{ url('/') }}/assets/images/testimonial/testimonial2.jpg"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img src="{{ url('/') }}/assets/images/icons/quote-icon.png" alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>
                                                        <span class="post">Customer</span>
                                                    </div>
                                                </div>
                                                <!-- single testimonial item Strat-->
                                            </div>
                                            <div class="item">
                                                <!-- single testimonial item Strat-->
                                                <div class="single-testimonial-item">
                                                    <div class="testimonial-image">
                                                        <img src="{{ url('/') }}/assets/images/testimonial/testimonial3.jpg"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p class="testimonial-text"> Sed vel urna at dui iaculis
                                                            gravida. Maecenas pretium, velit vitae placerat faucibus,
                                                            velit quam facilisis elit, sit amet lacinia est est id
                                                            ligula. Duis feugiat quam non justo faucibus, in gravida
                                                            diam tempor. Nam viverra enim non ipsum ornare, condimentum
                                                            blandit diam mattis. Maecenas gravida mol..</p>
                                                        <img src="{{ url('/') }}/assets/images/icons/quote-icon.png" alt="">
                                                        <p class="testimonial-author">Magdalena Valencia</p>
                                                        <span class="post">Customer</span>

                                                    </div>
                                                </div>
                                                <!-- single testimonial item Strat-->
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
        <!-- Testimonial Area End -->



        <!--NewsLetter section start-->
        <div
            class="newsLetter-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ url('/') }}/assets/images/blog/blog-details-4.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-wrapper">
                            <p class="small-text">Special Ofers For Subscribers</p>
                            <h3 class="title">Subscribe Our<span> Newsletter</span></h3>
                            <p class="short-desc">Subscribe to our Newsletter and be the first to know about
                                any special offers and latest updates.
                                </p>

                            <div class="newsletter-form">
                                <form id="mc-form" class="mc-form">
                                    <input type="email" placeholder="Enter Your Email Address Here..." required>
                                    <button type="submit" value="submit">SUBSCRIBE!</button>
                                </form>

                            </div></br>
                            <div class="col-12 mb-20">
                                <div class="check-box">
                                    <input type="checkbox" id="subscribe">
                                    <label for="create_account">I agree to subscribe the newsletter in accordance with<a data-bs-toggle="modal" data-bs-target="#myModal" style="color:#b49f64"> Singapore's Data Protection and Privacy Act</a></label>
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                          <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                              <h4 class="modal-title">PDPA Notice..</h4>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body" style="text-align: justify;">
                                                This Data Protection Notice (“Notice”) sets out the basis which Goodman’s Loft (“we”, “us”, or “our”) may
                                                collect, use, disclose or otherwise process personal data of our customers in accordance with the Personal Data
                                                Protection Act (“PDPA”). This Notice applies to personal data in our possession or under our control, including
                                                personal data in the possession of organisations which we have engaged to collect, use, disclose or process
                                                personal data for our purposes.
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                            </div>

                                          </div>
                                        </div>
                                </div>

                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--NewsLetter section end-->
   <!-- Modal Area End -->
@endsection

@section('content')
<script>
    $(document).ready(function()
    {
        loadcart();
    });

    function loadcart()
    {
        $.ajax({
            method: "GET",
            url: "/loadcart",
            success: function (response){
                $('.cart-count').html('');
                $('.cart-count').html(response.count);

            }
        });
    }
</script>
<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less";
        moreText.style.display = "inline";
      }
    }
    </script>
@endsection
