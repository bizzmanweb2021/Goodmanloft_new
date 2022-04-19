@extends('Frontend.layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="page-banner text-center">
                <h2>Product Detail</h2>
                <ul class="page-breadcrumb">
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li>Product Detail</li>
                </ul>
            </div>
        </div>
    </div>
</div>
        <!-- Single Product Section Start -->
        <div class="single-product-section section pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-md-6">
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
                                                <a href="#" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="{{ asset($product->product_image )}}" alt="">
                                                <a href="#" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
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
                                            }}]'>
                                            <div class="sm-image"><img src="{{ asset($product->product_image )}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{ asset($product->product_image )}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{ asset($product->product_image )}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{ asset($product->product_image )}}" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="{{ asset($product->product_image )}}" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <h2>{!! $product->product_name !!}</h2>
                                        <div class="single-product-price">
                                            <span class="price new-price">${!! $product->Price !!}</span>
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
                                        <div class="wishlist-compare-btn">
                                            <a href="{{ route('wishlistShow',$product['id']) }}" class="wishlist-btn">Add to Wishlist</a>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="https://www.facebook.com/Goodmanloft"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.instagram.com/goodmansloft/"><i class="fa fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Product Section End -->
@endsection
