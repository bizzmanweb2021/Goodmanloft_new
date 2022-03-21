
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Goodman’s Loft</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{ asset('assets/images/favicon.ico') }}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iconfont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/helper.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">

</head>
<body>
    <div class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                   <p><i class="fa fa-map-pin"></i>  1 Pemimpin Dr, 04-01 One Pemimpin, Singapore 576151
                   </p>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li><a href="https://wa.me/6596352229" target="_blank"><i class="fa fa-phone"></i> <i class="fa fa-whatsapp"></i> &nbsp; +65 96352229</a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <header class="header header-sticky d-none d-lg-block">
        <div class="header-default">
            <div
                class="container-fluid pl-115 pl-lg-15 pl-md-15 pl-sm-15 pl-xs-15 pr-115 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                <div class="row align-items-center">

                    <!-- Header Logo Start -->
                    <div class="col-lg-12">
                        <div class="header-nav d-flex justify-content-between align-items-center">
                            <div class="header-logo text-center">
                                <a href="{{ route('user.index') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" class="img-fluid"></a>
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
                                <form action="{{ route('product.search') }}" method="GET" role="search">
                                    <div class="header-search">
                                        <button class="header-search-toggle"><i
                                                class="ion-ios-search-strong"></i></button>
                                        <div class="header-search-form">
                                            <form action="#">
                                                <input type="text" placeholder="Type and hit enter">
                                                <button><i class="ion-ios-search-strong"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </form>

                                <div class="header-cart">
                                    <a href="{{ route('cart.show') }}"><i class="fa fa-shopping-bag"></i><span class="cart-count">{{ App\Models\Cart::where('user_id',Auth::check()?Auth::user()->id:0)->count() }}</span></a>
                                    <!--Mini Cart Dropdown Start-->
                                    {{-- <div class="header-cart-dropdown"> --}}

                                        {{-- <div class="cart-total">
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
                    <!-- Header Logo Start -->

                </div>

            </div>
        </div>
    </header>
    <header class="header-mobile d-block d-lg-none">
        <div class="header-bottom menu-right">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-mobile-navigation d-block d-lg-none">
                            <div class="row align-items-center">
                                <div class="col-6 col-md-6">
                                    <div class="header-logo">
                                        <a href="index.html">
                                            <img src="assets/images/logo.png" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mobile-navigation text-right">
                                        <div class="header-icon-wrapper">
                                            <ul class="icon-list justify-content-end">
                                                <li>
                                                    <div class="header-cart-icon">
                                                        <a href="{{ route('cart.list') }}"><i class="fa fa-shopping-bag"></i><span class="cart-count">{{ App\Models\Cart::where('user_id',Auth::check()?Auth::user()->id:0)->count() }}</span></a>

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

</body>
