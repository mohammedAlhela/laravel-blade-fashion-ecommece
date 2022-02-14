<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->



    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

</head>

<body>
    <div id="app-1">
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Header Section Begin -->
        <header class="header-section">
            <div class="header-top">
                <div class="container">
                    <div class="ht-left">
                        <div class="mail-service">
                            <i class=" fa fa-envelope"></i>
                            istanbuliat@gmail.com
                        </div>
                        <div class="phone-service">
                            <i class="fa fa-phone"></i>
                            +65
                            11.188.888
                        </div>
                    </div>
                    <div class="ht-right">
                        @auth
                            <div class="login-panel">
                                <button type="button" class="btn btn-light dropdown-toggle account-button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Mohammed
                                    alhelal
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="account">Account</a>
                                    <a class="dropdown-item" href="logout">Logout</a>
                                </div>
                            </div>
                        @endauth
                        @guest
                            <span class="login-panel">
                                <i class="fa fa-user"></i>
                                <a href="register" class="hovered">
                                    Register
                                </a>
                                /
                                <a href="login" class="hovered">
                                    Login
                                </a>
                            </span>
                        @endguest
                        <div class="top-social">
                            <a
                                href="https://www.facebook.com/pages/category/Shopping---Retail/Istanbuliat-UAE-112297630516968/"><i
                                    class="ti-facebook"></i></a>
                            <a href="https://mobile.twitter.com/hashtag/istanbulmodestfashionweek?src=hash"><i
                                    class="ti-twitter-alt"></i></a>
                            <a href="https://www.instagram.com/explore/tags/istanbuliat/?hl=en"><i
                                    class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="inner-header">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <div class="logo">
                                <a href="./">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="advanced-search">
                                <div class="input-group">
                                    <input type="text" placeholder="What do you need?">
                                    <button type="button"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 text-right col-md-3">
                            <ul class="nav-right">
                                <li class="heart-icon">
                                    <a href="/whishlist">
                                        <i class="icon_heart_alt"></i>
                                        <span>1</span>
                                    </a>
                                </li>
                                <li class="cart-icon">
                                    <a href="/cart" class="cart-icon-link">
                                        <i class="icon_cart_alt"></i>
                                        <span>3</span>
                                    </a>
                                    <div class="cart-hover">
                                        <div class="select-items">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="si-pic">
                                                            <img src="img/select-product-1.jpg" alt="">
                                                        </td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1
                                                                </p>
                                                                <h6>Kabino Bedside Table
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="si-pic">
                                                            <img src="img/select-product-2.jpg" alt="">
                                                        </td>
                                                        <td class="si-text">
                                                            <div class="product-selected">
                                                                <p>$60.00 x 1
                                                                </p>
                                                                <h6>Kabino Bedside Table
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td class="si-close">
                                                            <i class="ti-close"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="select-total">
                                            <span>total:</span>
                                            <h5>$120.00
                                            </h5>
                                        </div>
                                        <div class="select-button">
                                            <a href="/cart" class="primary-btn view-card">VIEW
                                                CARD</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-price">
                                    $150.00
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item">
                <div class="my-container">
                    <div class="nav-depart">



                        <div class="depart-btn @if (\Request::is('shop')) active-depart-btn @endif">


                            <span class="paragraph">Sections</span>
                            <ul class="depart-hover">
                                <li><a href="#">Women’s
                                        Clothing</a>
                                </li>
                                <li><a href="#">Men’s
                                        Clothing</a>
                                </li>
                                <li><a href="#">Underwear</a>
                                </li>
                                <li><a href="#">Kid's
                                        Clothing</a>
                                </li>
                                <li><a href="#">Brand
                                        Fashion</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="nav-menu ">
                        <ul>
                            <li class=" @if (\Request::is('/')) active @endif">
                                <a href="./">Home</a>
                            </li>

                            <li class=" @if (\Request::is('contact')) active @endif">
                                <a href="/contact">Contact</a>

                            <li class=" @if (\Request::is('about')) active @endif">

                                <a href="/about">About</a>

                            </li>



                            <li class="policies-menu @if (\Request::is('policies')) active @endif">

                                <a href="#" class="policies-holder">Policies</a>



                                <ul class="dropdown">
                                    <li><a href="./policies/privacy">Privacy</a>
                                    </li>
                                    <li><a href="./policies/shopping">Shopping</a>
                                    </li>
                                    <li><a href="./policies/refound">Refound</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </nav>
                    <div id="mobile-menu-button">
                        Menu <i class="fa fa-bars ml-1"></i>
                    </div>

                    <div id="mobile-menu">
                        <ul class="menu">

                            <div class="mobile-sub-menu-holder">
                                <li class="link " id="">

                                    <span cl
                                        class="paragraph sub-menu-trigger @if (\Request::is('shop')) active-sub-menu-trigger @endif">





                                        Sections <i class="toggle-chevron fa fa-chevron-circle-right"> </i>

                                    </span>



                                    <ul class="mobile-sub-menu">
                                        <li class="link">
                                            <a href="/privary">Coats</a>
                                        </li>

                                        <li class="link">
                                            <a href="/privary">Dresses</a>
                                        </li>


                                        <li class="link">
                                            <a href="/privary">Kimono</a>
                                        </li>


                                        <li class="link">
                                            <a href="/privary">Abayas</a>
                                        </li>

                                    </ul>

                                </li>

                            </div>
                            <li class=" link ">
                                <a href="/"><span       class="paragraph  @if (\Request::is('/')) active @endif">  Home </span></a>

                            </li>

                            <li class="link">

                                <a href="/contact"><span       class="paragraph  @if (\Request::is('contact')) active @endif">  Contact </span></a>

                            </li>

                            <li class="link">

                                <a href="/about"> <span       class="paragraph  @if (\Request::is('about')) active @endif">  About </span></a>

                            </li>






                            <div class="mobile-sub-menu-holder">
                                <li class="link">

                                    <span
                                        class="paragraph sub-menu-trigger @if (\Request::is('policies')) active-sub-menu-trigger @endif">
                                        Policies <i class="toggle-chevron fa fa-chevron-circle-right"> </i>
                                    </span>
                                    <ul class="mobile-sub-menu">
                                        <li class="link">
                                            <a href="/privary">Privacy</a>

                                        </li>

                                        <li class="link">
                                            <a href="/privary">Shopping</a>
                                        </li>
                                        <li class="link">
                                            <a href="/privary">Refound</a>
                                        </li>
                                    </ul>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->
        <main class="">
            @yield('content')
        </main>
        <footer class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="#"><img src="img/footer-logo.png" alt=""></a>
                            </div>
                            <ul>
                                <li>Phone: +65 11.188.888
                                </li>
                                <li>Email: istanbuliat@gmail.com
                                </li>
                            </ul>
                            <div class="footer-social">
                                <a
                                    href="https://www.facebook.com/pages/category/Shopping---Retail/Istanbuliat-UAE-112297630516968/"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://mobile.twitter.com/hashtag/istanbulmodestfashionweek?src=hash"><i
                                        class="fa fa-twitter"></i></a>
                                <a href="https://www.instagram.com/explore/tags/istanbuliat/?hl=en"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1">
                        <div class="footer-widget">
                            <h5>Pages
                            </h5>
                            <ul>
                                <li><a href="/home" class="hovered">Home</a>
                                </li>
                                <li><a href="/shop" class="hovered">Shop</a>
                                </li>
                                <li><a href="/contact" class="hovered">Contact</a>
                                </li>
                                <li><a href="/about" class="hovered">About</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h5>Account
                            </h5>
                            <ul>
                                <li><a href="/account" class="hovered">Profile</a>
                                </li>
                                <li><a href="/orders" class="hovered">Orders</a>
                                </li>
                                <li><a href="/cart" class="hovered">Shopping
                                        Cart</a>
                                </li>
                                <li><a href="/whishlist" class="hovered">Whishlists</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="newslatter-item">
                            <h5>Subscripe Now
                            </h5>
                            <p>Get E-mail updates
                                about
                                our
                                latest
                                shop
                                and
                                special
                                offers.
                            </p>
                            <form action="#" class="subscribe-form">
                                <input type="text" placeholder="Enter Your Mail">
                                <button type="button">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-reserved">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="copyright-text">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All
                                rights
                                reserved
                                |
                                Powered
                                by
                                <strong> brothers soft
                                </strong>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                            <div class="payment-pic">
                                <img src="img/payment-method.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>



<script>
    $(document).ready(function() {
        $('#mobile-menu-button').click(function() {
            $('#mobile-menu').slideToggle();
        });



        $('.sub-menu-trigger').click(function() {
            $(this).find('.toggle-chevron').toggleClass('fa-chevron-circle-right');
            $(this).find('.toggle-chevron').toggleClass('fa-chevron-circle-down');
            $(this).next().slideToggle('fast');
        });

    });
</script>

</html>
