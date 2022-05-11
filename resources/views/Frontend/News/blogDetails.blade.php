@extends('Frontend.layouts.master')
@section('content')

   

<body>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/blog-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-center">
                            <h2>Blog Details</h2>
                            <ul class="page-breadcrumb">
                            <li><a href="{{ route('user.index') }}">Home</a></li>
                            <li><a href="{{ route('blogDetails.show') }}">Article</a></li>   
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->

        <!-- Blog Section Start -->
        <div class="blog-section section pt-100 pt-lg-80 pt-md-70 pt-sm-50 pt-xs-40">
            <div class="container sb-border pb-80 pb-lg-60 pb-md-50 pb-sm-60 pb-xs-50">
                <div class="row">
                    <div class="col-lg-3 order-lg-1 order-2">
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                        <!-- Single Sidebar Start  -->
                        <div class="common-sidebar-widget">
                            <h3 class="sidebar-title">Recent posts</h3>
                            <div class="sidebar-blog">
                                <a href="{{ route('blogDetails.show') }}" class="image"><img src="assets/images/rc-post/blog1.jpg" alt=""></a>
                                <div class="content">
                                    <h5><a href="{{ route('blogDetails.show') }}">Blog image post (sticky)</a></h5>
                                    <span>April 24, 2018</span>
                                </div>
                            </div>
                            <div class="sidebar-blog">
                                <a href="{{ route('blogDetails.show') }}" class="image"><img src="assets/images/rc-post/blog2.jpg" alt=""></a>
                                <div class="content">
                                    <h5><a href="{{ route('blogDetails.show') }}">Post with Gallery</a></h5>
                                    <span>April 24, 2018</span>
                                </div>
                            </div>
                            <div class="sidebar-blog">
                                <a href="{{ route('blogDetails.show') }}" class="image"><img src="assets/images/rc-post/blog3.jpg" alt=""></a>
                                <div class="content">
                                    <h5><a href="{{ route('blogDetails.show') }}">Post with Audio</a></h5>
                                    <span>April 24, 2018</span>
                                </div>
                            </div>
                            <div class="sidebar-blog">
                                <a href="{{ route('blogDetails.show') }}" class="image"><img src="assets/images/rc-post/blog4.jpg" alt=""></a>
                                <div class="content">
                                    <h5><a href="{{ route('blogDetails.show') }}">Post with Video</a></h5>
                                    <span>April 24, 2018</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single Sidebar End  -->
                       
                        
                        <!-- Single Sidebar Start  -->
                  
                        <!-- Single Sidebar End  -->
                    </div>
                    <div class="col-lg-9 mb-sm-40 mb-xs-30">
                        <div class="blog_area">
                            <article class="blog_single blog-details">
                                <header class="entry-header">
                                    <span class="post-category">
                                        <a href="#"> Fashion</a>,<a href="#">WordPress</a>
                                    </span>
                                    <h2 class="entry-title">
                                        Blog image post
                                    </h2>
                                    <span class="post-author">
                                    <span class="post-by"> Posts by : </span> admin </span>
                                    <span class="post-separator">|</span>
                                    <span class="post-date"><i class="fas fa-calendar-alt"></i>On March 10, 2018 </span>
                                </header>
                                <div class="post-thumbnail img-full">
                                    <img src="assets/images/blog/blog-details-1.jpg" alt="">
                                </div>
                                <div class="postinfo-wrapper">
                                    <div class="post-info">
                                        <div class="entry-summary blog-post-description">
                                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue condimentum rhoncus. Praesent ornare tortor ac ante egestas hendrerit. Aliquam et metus pharetra, bibendum massa nec, fermentum odio. Nunc id leo ultrices, mollis ligula in, finibus tortor. Mauris eu dui ut lectus fermentum eleifend. Pellentesque faucibus sem ante, non malesuada odio varius nec. Suspendisse potenti.</p>
                                            <blockquote><p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p></blockquote>
                                            <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                            <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                            <!--Blog Post Tag-->
                                         
                                            <!--Blog Post Tag-->
                                            <div class="social-sharing">
                                                <div class="widget widget_socialsharing_widget">
                                                    <h3 class="widget-title">Share this post</h3>
                                                    <ul class="blog-social-icons">
                                                        <li>
                                                            <a target="_blank" title="Facebook" href="#" class="facebook social-icon">
                                                                <i class="fa fa-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="twitter" href="#" class="twitter social-icon">
                                                                <i class="fa fa-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="pinterest" href="#" class="pinterest social-icon">
                                                                <i class="fa fa-pinterest"></i>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a target="_blank" title="linkedin" href="#" class="linkedin social-icon">
                                                                <i class="fa fa-linkedin"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                       
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