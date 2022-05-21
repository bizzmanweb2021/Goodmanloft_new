@extends('Frontend.layouts.master')
@section('content')

   
<body>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/blog-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>News</h2>
                            <div class="page-banner text-center">
                            <!-- <h2>Promotions</h2> -->
                           <!-- <img src="assets/images/blog-banner.jpg" alt=""  > -->
                            </div>
                            <ul class="page-breadcrumb">
                                <li><a href="{{ route('user.index') }}">Home</a></li>
                                <li><a href="{{ route('newsDetails.show') }}">Article</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Blog Section Start -->
        <div class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50">
            <div class="container sb-border pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
                <div class="row">
                    
                    <div class="col-lg-12 order-lg-2 order-1">
                        <div class="row">
                            <!-- Single Blog Start -->
                            <div class="blog col-lg-4 col-md-4 col-sm-6 mb-30">
                                <div class="blog-inner">
                                    <div class="media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-details-1.jpg" alt=""></a></div>
                                    <div class="content">
                                        <h3 class="title"><a href="blog-details.html">Cool boy with tattoo</a></h3>
                                        <ul class="meta">
                                            <li>By <a href="#" tabindex="0">admin</a></li>
                                            <li>30 October 2018</li>
                                        </ul>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        <a class="btn" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                            <!-- Single Blog Start -->
                            <div class="blog col-lg-4 col-md-4 col-sm-6 mb-30">
                                <div class="blog-inner">
                                    <div class="media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-details-2.jpg" alt=""></a></div>
                                    <div class="content">
                                        <h3 class="title"><a href="blog-details.html">Blog image post</a></h3>
                                        <ul class="meta">
                                            <li>By <a href="#" tabindex="0">admin</a></li>
                                            <li>30 October 2018</li>
                                        </ul>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        <a class="btn" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                      
                            <!-- Single Blog Start -->
                            <div class="blog col-lg-4 col-md-4 col-sm-6 mb-30">
                                <div class="blog-inner">
                                    <div class="media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-details-3.jpg" alt=""></a></div>
                                    <div class="content">
                                        <h3 class="title"><a href="blog-details.html">Blog Audio post</a></h3>
                                        <ul class="meta">
                                            <li>By <a href="#" tabindex="0">admin</a></li>
                                            <li>30 October 2018</li>
                                        </ul>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        <a class="btn" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                            <!-- Single Blog Start -->
                            <div class="blog col-lg-4 col-md-4 col-sm-6 mb-30">
                                <div class="blog-inner">
                                    <div class="media"><a href="blog-details.html" class="image"><img src="assets/images/blog/blog-details-4.jpg" alt=""></a></div>
                                    <div class="content">
                                        <h3 class="title"><a href="blog-details.html">Blog Video post</a></h3>
                                        <ul class="meta">
                                            <li>By <a href="#" tabindex="0">admin</a></li>
                                            <li>30 October 2018</li>
                                        </ul>
                                        <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio.</p>
                                        <a class="btn" href="blog-details.html">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="row mb-0 mb-xs-35 mb-sm-35">
                            <div class="col">
                                <ul class="page-pagination">
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="active"><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

    

       <!--Footer section start-->
       <footer class="footer-section section footer-pattern">

        <!--Footer Top start-->
        <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-15 pb-xs-5">
            <div class="container">
                <div class="row">

                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-6 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <div class="footer-logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                        </div>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,
                            vel illum dolore eu feugiat nulla facilisis.</p>
                        <div class="f-social-title">
                            <h3>Follow Us On Social:</h3>
                        </div>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                           
                        </div>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">My Account</span></h4>
                        <ul class="ft-menu">
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Shipping Information</a></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">About Us</span></h4>
                        <ul class="ft-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Shopping Guide</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">FAQ</a></li>
                           
                        </ul>
                    </div>
                      <!--Footer Widget start-->
                      <div class="footer-widget col-lg-2 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Opening Time</span></h4>
                        <p class="mb-15">Mon – Fri: 8AM – 10PM</p>
                        <p class="mb-15">Sat: 9AM-8PM</p>
                        <p class="mb-15">Sun: Closed</p>
                       
                    </div>
                    <!--Footer Widget end-->
                    <!--Footer Widget end-->
                </div>
            </div>
        </div>
        <!--Footer Top end-->

        <!--Footer bottom start-->
        <div class="footer-bottom section">
            <div class="container">
                <div class="row g-0">
                    <div class="col-12 ft-border pt-25 pb-25">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="copyright text-left">
                                    <p>Copyright &copy;2021 <a href="#">CSS Office</a>. All rights reserved.</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->

    <!-- Modal Area Strat -->
    <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xl-12 col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
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
                                            <img src="assets/images/product/large-product/l-product-1.jpg" alt="">
                                            <a href="assets/images/product/large-product/l-product-1.jpg"></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="assets/images/product/large-product/l-product-2.jpg" alt="">
                                            <a href="assets/images/product/large-product/l-product-2.jpg"></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="assets/images/product/large-product/l-product-3.jpg" alt="">
                                            <a href="assets/images/product/large-product/l-product-3.jpg"></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="assets/images/product/large-product/l-product-4.jpg" alt="">
                                            <a href="assets/images/product/large-product/l-product-4.jpg"></a>
                                        </div>
                                        <div class="lg-image">
                                            <img src="assets/images/product/large-product/l-product-5.jpg" alt="">
                                            <a href="assets/images/product/large-product/l-product-5.jpg"></a>
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
                                                src="assets/images/product/small-product/s-product-1.jpg"
                                                alt="product image thumb"></div>
                                        <div class="sm-image"><img
                                                src="assets/images/product/small-product/s-product-2.jpg"
                                                alt="product image thumb"></div>
                                        <div class="sm-image"><img
                                                src="assets/images/product/small-product/s-product-3.jpg"
                                                alt="product image thumb"></div>
                                        <div class="sm-image"><img
                                                src="assets/images/product/small-product/s-product-4.jpg"
                                                alt="product image thumb"></div>
                                        <div class="sm-image"><img
                                                src="assets/images/product/small-product/s-product-5.jpg"
                                                alt="product image thumb"></div>
                                    </div>
                                </div>
                                <!--Product Details Left -->
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <!--Product Details Content Start-->
                                <div class="product-details-content">
                                    <!--Product Nav Start-->
                                    <div class="product-nav">
                                        <a href="#"><i class="fa fa-angle-left"></i></a>
                                        <a href="#"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <!--Product Nav End-->
                                    <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                    <div class="single-product-reviews">
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star active"></i>
                                        <i class="fa fa-star-o"></i>
                                        <a class="review-link" href="#">(1 customer review)</a>
                                    </div>
                                    <div class="single-product-price">
                                        <span class="price new-price">$66.00</span>
                                        <span class="regular-price">$77.00</span>
                                    </div>
                                    <div class="product-description">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                            veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et
                                            mattis vulputate, tristique ut lectus</p>
                                    </div>
                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="#">
                                            <div class="product-quantity">
                                                <input value="1" type="number">
                                            </div>
                                            <div class="add-to-link">
                                                <button class="btn"><i class="ion-bag"></i>add to cart</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wishlist-compare-btn">
                                        <a href="#" class="wishlist-btn">Add to Wishlist</a>
                                        <a href="#" class="add-compare">Compare</a>
                                    </div>
                                    <div class="product-meta">
                                        <span class="posted-in">
                                            Categories:
                                            <a href="#">Accessories</a>,
                                            <a href="#">Electronics</a>
                                        </span>
                                    </div>
                                    <div class="single-product-sharing">
                                        <h3>Share this product</h3>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
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
    <!-- Modal Area End -->

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

</body>

@endsection