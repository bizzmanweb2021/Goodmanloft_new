@extends('Frontend.layouts.master')

@section('content')
<div class="content">
    <!-- Page Banner Section Start -->
        {{-- <div class="page-banner-section section bg-image" data-bg="{{ asset('assets/images/inner-breadcum.png') }}"> --}}
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-banner text-center">
                            <h2>Product</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('user.index') }}">Home</a></li>
                                <li>Product</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
        <!-- Page Banner Section End -->

        <!-- Single Product Section Start -->
        <div class="single-product-section section pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20" style="background-image: url(assets/images/product-pattern.jpg); width: 100%; background-size: contain;">
            <div class="container">
                <div class="row" >
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                        <div class="product-details-content">
                                            <h2 style="margin-top: 25px;">{!! $product->product_name !!}</h2>
                                        </div>
                                    </div>

                            </div>
                            <div class="row no-gutters" >
                                <div class="col-md-3"></div>
                                <div class="col-md-6" style="background-color: #fff;">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-lg-image-1 tf-element-carousel"
                                            data-slick-options='{
                                            "slidesToShow": 1,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "asNavFor": ".slider-thumbs-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }'>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1 tf-element-carousel"
                                            data-slick-options='{
                                            "slidesToShow": 4,
                                            "slidesToScroll": 1,
                                            "infinite": true,
                                            "focusOnSelect": true,
                                            "asNavFor": ".slider-lg-image-1",
                                            "arrows": false,
                                            "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "fa fa-angle-left" },
                                            "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "fa fa-angle-right" }
                                            }' data-slick-responsive='[
                                            {"breakpoint":991, "settings": {
                                                "slidesToShow": 3
                                            }},
                                            {"breakpoint":767, "settings": {
                                                "slidesToShow": 4
                                            }},
                                            {"breakpoint":479, "settings": {
                                                "slidesToShow": 2
                                            }}
                                        ]'>
                                            <div class="sm-image"><img
                                                    src="{{ asset($product->product_image )}}"
                                                    alt="product image thumb">
                                            </div>
                                            <div class="sm-image"><img
                                                    src="{{ asset($product->product_image )}}"
                                                    alt="product image thumb">
                                            </div>
                                            <div class="sm-image"><img
                                                    src="{{ asset($product->product_image )}}"
                                                    alt="product image thumb">
                                            </div>
                                            <div class="sm-image"><img
                                                    src="{{ asset($product->product_image )}}"
                                                    alt="product image thumb">
                                            </div>
                                            <div class="sm-image"><img
                                                    src="{{ asset($product->product_image )}}"
                                                    alt="product image thumb">
                                            </div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->

                                        <!--Product Nav End-->
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(10 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">${!! $product->Price !!}</span>
                                            <span class="regular-price">${!! $product->Price !!}</span>
                                        </div>
                                        <div class="product-description">
                                            <p>{!! $product->Product_Description !!}</p>
                                        </div>

                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="{{ route('cart.store') }}" method="POST">
                                                @csrf
                                                <div class="product-quantity">
                                                    <input type="hidden" name="id" value="{{$product->id}}">
                                                    <input value="1" name="quantity" min="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button type="submit" class="btn"><i class="ion-bag"></i>add to cart</button>
                                                </div>

                                            </form>
                                        </div>

                                       <div class="row">
                                           <div class="col-md-7">
                                            <div class="product-meta">
                                                <span class="posted-in">
                                                    Categories:
                                                    <a href="#">Accessories</a>,
                                                    <a href="#">Electronics</a>
                                                </span>
                                            </div>
                                           </div>
                                           <div class="col-md-5">
                                            <div class="single-product-sharing">
                                                <h3>Share</h3>
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                </ul>
                                            </div>
                                           </div>
                                       </div>
                                        {{-- <div class="review-form-wrapper">
                                            <div class="review-form">
                                                <span class="comment-reply-title">Add a review </span>
                                                <form action="#">
                                                    <p class="comment-notes">
                                                        <span id="email-notes">Your email address will not be
                                                            published.</span>
                                                        Required fields are marked
                                                        <span class="required">*</span>
                                                    </p>

                                                    <div class="input-element">
                                                        <div class="review-comment-form-author">
                                                            <label>Name </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="review-comment-form-email">
                                                            <label>Email </label>
                                                            <input required="required" type="text">
                                                        </div>
                                                        <div class="comment-form-comment">
                                                            <label>Comment</label>
                                                            <textarea name="message" cols="40" rows="8"></textarea>
                                                        </div>

                                                        <div class="comment-submit">
                                                            <button type="submit" class="form-button">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div> --}}
                                    </div>


                                    </div>

                                    <!--Product Details Content End-->
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
