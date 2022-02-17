<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>





    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!--++++++++++++++++++++++++++ the css styles and libraries +++++++++++++++++++++++ -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="  {{ asset('css/animate.css') }} ">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="  {{ asset('css/icomoon.css') }}  ">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="  {{ asset('css/bootstrap.css') }} ">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="  {{ asset('css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="  {{ asset('css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href=" {{ asset('css/owl.carousel.min.css ') }}">

    <link rel="stylesheet" href="  {{ asset('css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="  {{ asset('css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="  {{ asset('fonts/flaticon/font/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="  {{ asset('css/style.css') }}">
    <!--++++++++++++++++++++++++++ the css styles and libraries +++++++++++++++++++++++ -->








</head>

<body>


    <div class="colorlib-loader"></div>

    <div id="page">

        <nav class="colorlib-nav" role="navigation">
            <div class="top-menu">
                <div class="container">
                    <div class="row account-holder">
                        <div class="col-xs-3">
                            <img src="{{ asset('images/project/brand.jpeg') }}" alt="no brand" width="100px">
                        </div>
                        <div class="col-xs9 text-right menu-1">
                            <ul>
                                <li class="has-dropdown"><a href="cart.html"><i class="icon-user"></i>
                                        {{ Auth::check() ? auth()->user()->name : 'account' }}
                                    </a>
                                    <ul class="dropdown">
                                        @if (Auth::check())
                                            <li><a href="/home">Profile</a></li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="">
                                                @csrf

                                                <li><a href="javascript:{}"
                                                        onclick="document.getElementById('logout-form').submit();">Logout</a>
                                                </li>
                                            </form>

                                        @else
                                            <li><a href="/register">Register</a></li>
                                            <li><a href="/login">Login</a></li>
                                        @endif
                                    </ul>
                                </li>

                                <li><a href="/whishlist"><i class="icon-heart"></i> Cart [0]</a></li>
                                <li><a href="/cart"><i class="icon-shopping-cart"></i> Whishlist [0]</a></li>
                            </ul>
                        </div>
                    </div>






                    <div class="row search-links-holder">
                        <div class="col-xs-4">





                            <div class="input-group add-on search-input">
                                <input class="form-control" placeholder="Search" name="srch-term" id="srch-term"
                                    type="text">
                                <span class="search-icon-holder">


                                    <i class="icon-search"></i>
                                </span>
                            </div>


                        </div>
                        <div class="col-xs-8 text-right menu-1">
                            <ul>
                                <li class="active"><a href="/">Home</a></li>
                                <li class="has-dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="dropdown">
                                        <li><a href="product-detail.html">Abayas</a></li>
                                        <li><a href="cart.html">Coats</a></li>
                                        <li><a href="checkout.html">Kimono</a></li>
                                        <li><a href="order-complete.html">Pants</a></li>

                                    </ul>
                                </li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/contact">Contact</a></li>

                                <li class="has-dropdown">
                                    <a href="#">Policies</a>
                                    <ul class="dropdown">
                                        <li><a href="/policies/shipping">Shipping</a></li>
                                        <li><a href="/policies/Refound">Refound</a></li>
                                        <li><a href="/policies/Privacy">Privacy</a></li>


                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>



                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>



        <div id="colorlib-subscribe">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="col-md-6 text-center">
                            <h2><i class="icon-paperplane"></i>Sign Up for a Newsletter</h2>
                        </div>
                        <div class="col-md-6">
                            <form class="form-inline qbstp-header-subscribe">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email"
                                                placeholder="Enter your email">
                                            <button type="submit" class="btn btn-primary">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer id="colorlib-footer" role="contentinfo">
            <div class="container">
                <div class="row row-pb-md">
                    <div class="col-md-3 colorlib-widget">
                        <h4>About Istanbuliat</h4>
                        <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta
                            adipisci architecto culpa amet.</p>
                        <p>
                        <ul class="colorlib-social-icons">
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Customer Care</h4>

                        <ul class="colorlib-footer-links">
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="#">Returns/Exchange</a></li>

                            <li><a href="/whishlist">Wishlist</a></li>
                            <li><a href="#">Special</a></li>
                            <li><a href="#">Customer Services</a></li>

                        </ul>

                    </div>
                    <div class="col-md-2 colorlib-widget">
                        <h4>Information</h4>

                        <ul class="colorlib-footer-links">
                            <li><a href="/about">About us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="policies/privacy">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Order Tracking</a></li>
                        </ul>

                    </div>


                    <div class="col-md-3">
                        <h4>Contact Information</h4>
                        <ul class="colorlib-footer-links">
                            <li>Al ailn <br> Alhalidia street</li>
                            <li><a href="tel://1234567920">+ 1235 2355 98</a></li>
                            <li><a href="mailto:info@yoursite.com">istanbuliat@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copy">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>

                            <span class="block">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="icon-heart2" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Istanbuliat</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </span>

                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
    </div>


</body>


<!--++++++++++++++++++++++++++ the js  +++++++++++++++++++++++ -->
<!-- jQuery -->
<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<!-- jQuery Easing -->
<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>

<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
<!-- Date Picker -->
<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<!-- Stellar Parallax -->
<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!--++++++++++++++++++++++++++ the js +++++++++++++++++++++++ -->

</html>
