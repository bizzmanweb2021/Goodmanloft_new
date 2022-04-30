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
                        <li><a href="https://www.facebook.com/Goodmanloft"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/goodmansloft/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
     <!--Header Mobile section start-->
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
                        <form action="{{ route('search') }}" method="GET" role="search">
                            <input type="text" name="search" placeholder="Type and hit enter" required/ >
                            <button type="submit"><i class="ion-ios-search-strong"></i></button>
                        </form>
                </div>
                <nav class="offcanvas-navigation">
                    <ul>
                        <li class=""><a href="{{ route('user.index') }}">Home</a></li>
                        <li class="menu-item-has-children"><a href="#">Shop</a>
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
                        <li class=""><a href="{{ route('faq') }}">Faq</a></li>
                        <li><a href="#">Promotions</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                    </ul>
                </nav>

                {{-- <div class="offcanvas-settings">
                    <nav class="offcanvas-navigation">
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
                </div> --}}
            </div>
        </div>

    </div>
    <!-- Offcanvas Menu End -->
</body>
