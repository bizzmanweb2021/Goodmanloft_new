@extends('Frontend.layouts.master')
@section('content')

 <!-- Page Banner Section Start -->
 <div class="page-banner-section section bg-image" data-bg="assets/images/inner-breadcum.png">
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="page-banner text-center">
                    <h2>Nursery</h2>
                    <ul class="page-breadcrumb">
                        <li><a href="{{ route('user.index') }}">Home</a></li>
                        <li>Nursery</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Banner Section End -->

<!-- Shop Section Start -->
<div class="shop-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="shop-area sb-border pb-70 pb-lg-50 pb-md-40 pb-sm-60 pb-xs-50">
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
                                    <div class="toolbar-short-area d-md-flex align-items-center">
                                        <div class="toolbar-shorter ">
                                        <label>Sort By:</label>
                                            <select class="wide">
                                                <option data-display="Select">Nothing</option>
                                                <option value="Relevance">Relevance</option>
                                                <option value="Name, A to Z">Name, A to Z</option>
                                                <option value="Name, Z to A">Name, Z to A</option>
                                                <option value="Price, low to high">Price, low to high</option>
                                                <option value="Price, high to low">Price, high to low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Toolbar Short Area End-->
                            </div>
                            <!-- Grid & List View End -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 order-lg-1 order-2">
                            <!-- Single Sidebar Start  -->
                            <div class="common-sidebar-widget">
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
                            </div>
                            <!-- Single Sidebar End  -->
                            <!-- Single Sidebar Start  -->
                            <div class="common-sidebar-widget">
                                <h3 class="sidebar-title">Filter by price</h3>
                                <div class="sidebar-price">
                                    <div id="price-range" class="mb-20"></div>
                                    <button type="button" class="btn">Filter</button>
                                    <input type="text" id="price-amount" class="price-amount" readonly>
                                </div>
                            </div>
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
                            <div class="common-sidebar-widget">
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
                            </div>
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
                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/1-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/1_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Decor</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$100.00</span> <span class="main-price discounted">$120.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/2-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/2_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Decor</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">lorem ipsum cillium dolore decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$64.00</span> <span class="main-price discounted">$78.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/3-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/3_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$180.00</span> <span class="main-price discounted">$200.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/4-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/4_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$59.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/5-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/5_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$17.00</span> <span class="main-price discounted">$39.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/6-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/6_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Decor</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Auctor gravida enim pellentesque quam ut risus</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$85.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/7-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/7_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Sports</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore tortor nisl fermentum quam</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$70.00</span> <span class="main-price discounted">$80.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/8-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/8_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Furniture</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Consequuntur magni risus tincidunt convallis scelerisque</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$30.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/9-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/9_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Toy</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$40.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/10-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/10_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Storage</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Auctor gravida enim pellentesque quam ut risus</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$190.00</span> <span class="main-price discounted">$230.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/11-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/11_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Convallis quam sit vitae sodales neque ornare</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$59.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/12-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/12_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Accessories</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cras neque honcus consectetur magna imperdiet</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$96.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/13-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/13_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Outdoor</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$180.00</span> <span class="main-price discounted">$200.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/14-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/14_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$53.00</span> <span class="main-price discounted">$59.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/3-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/3_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$17.00</span> <span class="main-price discounted">$39.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/9-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/9_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$180.00</span> <span class="main-price discounted">$200.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/4-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/4_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$40.00</span> <span class="main-price discounted">$59.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>

                                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                                            <!--  Single Grid product Start -->
                                                            <div class="single-grid-product mb-30">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/5-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/5_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="product-content">
                                                                    <div class="product-category-rating">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <span class="rating">
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star active"></i>
                                                                        <i class="ion-android-star-outline"></i>
                                                                    </span>
                                                                    </div>

                                                                    <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                    <p class="product-price"><span class="discounted-price">$17.00</span> <span class="main-price discounted">$39.00</span></p>
                                                                </div>
                                                            </div>
                                                            <!--  Single Grid product End -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="list" class="tab-pane fade">
                                                <div class="product-list-view">
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/5-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/5_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$17.00</span> <span class="main-price discounted">$39.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/1-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/1_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Sports</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Aliquam lobortis est turpis mauris egestas eget</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$17.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/2-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/2_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Auctor gravida enim pellentesque quam ut risus</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$53.00</span> <span class="main-price discounted">$69.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/9-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/9_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cillum dolore tortor nisl fermentum quam</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$99.00</span> <span class="main-price discounted">$120.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/10-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/10_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Furniture</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$47.00</span> <span class="main-price discounted">$55.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/11-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/11_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Vase</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cillum dolore lorem ipsum decoration item</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$17.00</span> <span class="main-price discounted">$39.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/6-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/6_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Outdoor</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cillum dolore tortor nisl fermentum quam</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$171.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                        <span class="new">New</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/7-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/7_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Accessories</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Cras neque honcus consectetur magna imperdiet</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(3 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$37.00</span> <span class="main-price discounted">$47.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
                                                    <!-- Single List Product Start -->
                                                    <div class="product-list-item mb-40">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-6">
                                                            <div class="single-grid-product">
                                                                <div class="product-image">
                                                                    <div class="product-label">
                                                                        <span class="sale">-20%</span>
                                                                    </div>
                                                                    <a href="single-product.html">
                                                                        <img src="assets/images/product/12-600x800.jpg" class="img-fluid" alt="">
                                                                        <img src="assets/images/product/12_1-600x800.jpg" class="img-fluid" alt="">
                                                                    </a>

                                                                    <div class="product-action d-flex justify-content-between">
                                                                        <a class="product-btn" href="cart.html">Add to Cart</a>
                                                                        <ul class="d-flex">
                                                                            <li><a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a></li>
                                                                            <li><a href="compare.html"><i class="ion-ios-shuffle"></i></a></li>
                                                                            <li><a href="#quick-view-modal-container" data-bs-toggle="modal" title="Quick View"><i class="ion-ios-search-strong"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6">
                                                                <div class="product-content-shop-list">
                                                                    <div class="product-content">
                                                                        <span class="category"><a href="shop.html">Lighting</a></span>
                                                                        <h3 class="title"> <a href="single-product.html">Auctor gravida enim pellentesque quam ut risus</a></h3>
                                                                        <div class="product-category-rating">
                                                                            <span class="rating">
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star active"></i>
                                                                                <i class="ion-android-star-outline"></i>
                                                                            </span>
                                                                            <span class="review"><a href="#">(1 review)</a></span>
                                                                        </div>
                                                                        <p class="product-price"><span class="discounted-price">$88.00</span> <span class="main-price discounted">$95.00</span></p>
                                                                        <p class="product-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Single List Product Start -->
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
</div>
<!-- Shop Section End -->
@endsection
