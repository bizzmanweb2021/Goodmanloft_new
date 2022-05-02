@extends('Frontend.layouts.master_home')
@section('content')

<div class="site-banner">
    <div class="banner-logo">
        <a href="{{ route('user.index') }}"><img src="{{ url('/') }}/assets/images/logo.png" alt="" class="img-fluid"></a>
    </div>
    <ul>
        @foreach (App\Models\category::all() as $item )
        <li><a href="{{ route('product_show',$item->id) }}"> <img src="{{ $item->Category_image }}" style="height:50px; width:40px;" alt="" class="img-fluid"><span>{{ $item->Category_Name }}</span> </a></li>
        @endforeach
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
                            <h2><span> Products</span> </h2>

                        </div>
                    </div>
                </div>
            </div>
                <div class="product-bg-pattern">
                    <div class="container">
                        <div class="row">
                            @foreach ($product as $product )
                            <div class="col-md-4 col-sm-6 ">
                                {{-- @if (!empty($product[4]['id'])) --}}
                                <div class="single-grid-product mb-40">
                                    <div class="product-image">
                                        <div class="product-label">
                                            <span class="sale">Sale</span>
                                            <span class="new">New</span>
                                        </div>
                                        <a href="{{ route('productShow',$product['id']) }}" tabindex="0">
                                            <img src=" {{ asset($product['product_image']) }}" class="img-fluid" alt="" >
                                        </a>
                                        <div class="product-action d-flex justify-content-between">
                                                <input type="hidden" value="{{ $product['id'] }}" name="id">
                                                <input type="hidden" value="{{ $product['product_name'] }}" name="name">
                                                <input type="hidden" value="{{ $product['Price'] }}" name="price">
                                                <input type="hidden" value="{{ $product['product_image'] }}"  name="image">
                                                <input type="hidden" value="1" name="quantity">


                                                <a class="product-btn" href="{{ route('add.wish',$product['id']) }}" tabindex="0">Add to Cart</a>

                                            <ul class="d-flex">
                                                <li><a href="{{ route('wishlistShow',$product['id']) }}" tabindex="0"><i class="ion-android-favorite-outline"></i></a>
                                                </li>
                                                {{-- <li><a href="compare.html" tabindex="0"><i class="ion-ios-shuffle"></i></a></li> --}}
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="title"> <a href="{{ route('productShow',$product['id']) }}" tabindex="0">{{($product['product_name']) }}</a></h3>
                                                <p class="product-price"><span class="discounted-price">${{($product['Price']) }}</span> <span class="main-price discounted">$120.00</span></p>

                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                    @foreach (App\Models\Promotion::all() as $item )
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner-item mb-30">
                            <div class="banner-image">
                                <a href="{{ route('promotion') }}">
                                    <img src="{{ $item->banner }}" style="height:300px;" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Banner section end-->
        <div class="site-whatsapp">
            <a href="https://wa.me/6596352229" target="_blank"><img src="assets/images/wp-logo.png" alt=""></a>
        </div>

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
                                <h3>Popular <span> Products</span></h3>
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
                                        <li><a href="{{ route('about.index') }}">About Us</a></li>
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
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('promotion') }}">Promotions</a></li>
                                        <li><a href="#}">News</a></li>
                                        <li class=""><a href="{{ route('faq') }}">Faq</a></li>
                                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                                <div class="header-right_wrap d-flex">
                                    <div class="header-search">
                                        <button class="header-search-toggle"><i class="ion-ios-search-strong"></i></button>
                                        <div class="header-search-form">
                                            <form action="{{ route('search') }}" method="GET" role="search">
                                                <input type="text" name="search" placeholder="Type and hit enter" required/ >
                                                <button type="submit"><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header-cart">
                                        <a href="{{ route('cart.show') }}"><i class="fa fa-shopping-bag"></i><span class="cart-count">{{ App\Models\Cart::where('user_id',Auth::check()?Auth::user()->id:0)->count() }}</span></a>
                                    </div>
                                    <ul class="ht-us-menu">
                                        @if(Auth::check())
                                        <li><a href="#"><i class="fa fa-user"></i></a>
                                            <ul class="ht-dropdown right">
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
         {{-- <!--Header Mobile section start-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-bottom menu-right">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="header-mobile-navigation d-block d-lg-none">
                                <div class="row align-items-center">
                                    <div class="col-6 col-md-6">
                                        <div class="header-logo">
                                            <a href="{{ route('user.index') }}">
                                                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-6">
                                        <div class="mobile-navigation text-right">
                                            <div class="header-icon-wrapper">
                                                <ul class="icon-list justify-content-end">
                                                    <li>
                                                        <div class="header-cart-icon">
                                                            <a href="{{ route('cart.list') }}"><i class="ion-bag"></i><span>2</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="mobile-menu-icon"
                                                            id="mobile-menu-trigger"><i class="fa fa-bars"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Mobile Menu start-->
                    <div class="row">
                        <div class="col-12 d-flex d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                    <!--Mobile Menu end-->
                </div>
            </div>
        </header>
        <!--Header Mobile section end-->
        <!-- Offcanvas Menu Start -->
        <div class="offcanvas-mobile-menu" id="offcanvas-mobile-menu">
            <a href="javascript:void(0)" class="offcanvas-menu-close" id="offcanvas-menu-close-trigger">
                <i class="ion-android-close"></i>
            </a>
            <div class="offcanvas-wrapper">
                <div class="offcanvas-inner-content">
                    <div class="offcanvas-mobile-search-area">
                        <form action="#">
                            <input type="search" placeholder="Search ...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <nav class="offcanvas-navigation">
                        <ul>
                            <li class=""><a href="index.html">Home</a></li>
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="submenu2">
                                    <li class="menu-item-has-children"><a href="#">Furniture</a>
                                        <ul class="submenu2">
                                          <li><a href="shop.html">Nursery</a></li>
                                          <li><a href="#">Bedroom</a></li>
                                          <li><a href="#">Chairs & Benches</a></li>
                                          <li><a href="#">Shelves, Cabinets & Consoles</a></li>
                                          <li><a href="#">Tables</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#"> Decor & Accesories</a>
                                        <ul class="submenu2">
                                            <li><a href="#">Baskets</a></li>
                                            <li><a href="#">Cushions & Thorws</a></li>
                                            <li><a href="#">Decorative Ornaments</a></li>
                                            <li><a href="#">Lighting & Shades</a></li>
                                            <li><a href="#">Mirrors</a></li>
                                            <li><a href="#">Planters Vases & Pots</a></li>
                                            <li><a href="#">Wall Decor</a></li>
                                            <li><a href="#">Mats & Rugs</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Kitchenware</a>
                                        <ul class="submenu2">
                                            <li><a href="#">Bowls & Plate</a></li>
                                            <li><a href="#">Kitchen Textile</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Bed, Bath & Body</a>
                                        <ul class="submenu2">
                                           <li><a href="#">Bed Runners</a></li>
                                           <li><a href="#">Beddings </a></li>
                                           <li><a href="#">Candles and Diffusers</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>



                            </li>
                            <li class=""><a href="#">About us</a>

                            </li>
                            <li class="menu-item-has-children"><a href="#">Festive Decoration</a>
                            </li>
                            <li class=""><a href="faq.html">Faq</a></li>
                            <li class="menu-item-has-children"><a href="#">Contact Us</a>
                            </li>

                        </ul>
                    </nav>

                    <div class="offcanvas-settings">
                        <nav class="offcanvas-navigation">
                            <ul>
                                <li class="menu-item-has-children"><a href="#">MY ACCOUNT </a>
                                    <ul class="submenu2">
                                        <li><a href="login-register.html">Register</a></li>
                                        <li><a href="login-register.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">CURRENCY: USD </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)">€ Euro</a></li>
                                        <li><a href="javascript:void(0)">$ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">LANGUAGE: EN-GB </a>
                                    <ul class="submenu2">
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/en-gb.png"
                                                    alt=""> English</a></li>
                                        <li><a href="javascript:void(0)"><img src="assets/images/icons/de-de.png"
                                                    alt=""> Germany</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="off-canvas-contact-widget">
                            <div class="header-contact-info">
                                <ul class="header-contact-info-list">
                                    <li><i class="ion-android-phone-portrait"></i> <a href="tel:+6596352229">(+65)
                                        96352229

                                    </a></li>
                                    <li><i class="ion-android-mail"></i> <a
                                            href="mailto:Loft@goodmaninterior.com">Loft@goodmaninterior.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Off Canvas Widget Social Start-->
                        <div class="off-canvas-widget-social">
                            <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" title="Vimeo"><i class="fa fa-vimeo-square"></i></a>
                        </div>
                        <!--Off Canvas Widget Social End-->
                    </div>
                </div>
            </div>

        </div>
        <!-- Offcanvas Menu End --> --}}
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
                                            @foreach (App\Models\Testimonial::all() as $test)
                                            <div class="item">
                                                <!-- single testimonial item Strat-->
                                                <div class="single-testimonial-item">
                                                    <div class="testimonial-content">
                                                        <p class="testimonial-text"> {{ $test->review }}</p>
                                                        <img src="{{ url('/') }}/assets/images/icons/quote-icon.png" alt="">
                                                        <p class="testimonial-author">{{ $test->name }}</p>
                                                    </div>
                                                </div>

                                                <!-- single testimonial item End-->
                                            </div>
                                            @endforeach
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
        <div class="newsLetter-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="{{ url('/') }}/assets/images/newslatter.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-7">
                        <div class="newsletter-wrapper">
                        <p class="small-text">Special Offers For Subscribers</p>
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
                                    <label for="create_account">I agree to subscribe the newsletter in accordance with <a data-bs-toggle="modal" data-bs-target="#myModal" style="color:#b49f64"> Singapore's Data Protection and Privacy Act</a></label>
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
