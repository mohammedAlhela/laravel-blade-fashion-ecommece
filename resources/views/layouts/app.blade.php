<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page_title') </title>

    <link rel="icon" href="{{ URL::asset('img/project/favicon.ico') }}" type="image/x-icon"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

    <!--++++++++++++++++++++++++++ the css styles and libraries +++++++++++++++++++++++ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--++++++++++++++++++++++++++ the css styles and libraries +++++++++++++++++++++++ -->

</head>

<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


    <main>
        <!--? Hero Area Start-->
        <div class="container-fluid">
            <div class="slider-area">
                <!-- Mobile Device Show Menu-->
                <div class="header-right2 d-flex align-items-center">
                    <!-- Social -->
                    <div class="header-social  d-block d-md-none">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </div>
                    <!-- Search Box -->
                    <div class="search d-block d-md-none" >
                        <ul class="d-flex align-items-center">
                            <li class="mr-15">
                                <div class="nav-search search-switch">
                                    <i class="ti-search"></i>
                                </div>
                            </li>
                            <li>
                                <div class="card-stor">
                                    <img src="img/gallery/card.svg" alt="">
                                    <span>0</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /End mobile  Menu-->

                <div class="slider-active dot-style">
                    <!-- Single -->
                    <div class="single-slider slider-bg1 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>fashion<br>changing<br>always</h1>
                                        <a href="shop.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg2 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>fashion<br>changing<br>always</h1>
                                        <a href="shop.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single -->
                    <div class="single-slider slider-bg3 hero-overly slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-9">
                                    <!-- Hero Caption -->
                                    <div class="hero__caption">
                                        <h1>fashion<br>changing<br>always</h1>
                                        <a href="shop.html" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Hero -->
        <!--? Popular Items Start -->
        <div class="popular-items pt-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <div class="popular-img">
                                <img src="img/gallery/popular1.png" alt="">
                                <div class="img-cap">
                                    <span>Glasses</span>
                                </div>
                                <div class="favorit-items">
                                 <a href="shop.html" class="btn">Shop Now</a>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <div class="popular-img">
                            <img src="img/gallery/popular2.png" alt="">
                            <div class="img-cap">
                                <span>Watches</span>
                            </div>
                            <div class="favorit-items">
                             <a href="shop.html" class="btn">Shop Now</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="popular-img">
                        <img src="img/gallery/popular3.png" alt="">
                        <div class="img-cap">
                            <span>Jackets</span>
                        </div>
                        <div class="favorit-items">
                         <a href="shop.html" class="btn">Shop Now</a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="single-popular-items mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
                <div class="popular-img">
                    <img src="img/gallery/popular4.png" alt="">
                    <div class="img-cap">
                        <span>Clothes</span>
                    </div>
                    <div class="favorit-items">
                     <a href="shop.html" class="btn">Shop Now</a>
                 </div>
             </div>
         </div>
     </div>
 </div>
</div>
</div>
<!-- Popular Items End -->
<!--? New Arrival Start -->
<div class="new-arrival">
    <div class="container">
        <!-- Section tittle -->
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                    <h2>new<br>arrival</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                    <div class="popular-img">
                        <img src="img/gallery/arrival1.png" alt="">
                        <div class="favorit-items">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="img/gallery/favorit-card.png" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                        <h3><a href="product_details.html">Knitted Jumper</a></h3>
                        <div class="rating mb-10">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <span>$ 30.00</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="popular-img">
                        <img src="img/gallery/arrival2.png" alt="">
                        <div class="favorit-items">
                            <!-- <span class="flaticon-heart"></span> -->
                            <img src="img/gallery/favorit-card.png" alt="">
                        </div>
                    </div>
                    <div class="popular-caption">
                     <h3><a href="product_details.html">Knitted Jumper</a></h3>
                     <div class="rating mb-10">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <span>$ 30.00</span>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
            <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="popular-img">
                    <img src="img/gallery/arrival3.png" alt="">
                    <div class="favorit-items">
                        <!-- <span class="flaticon-heart"></span> -->
                        <img src="img/gallery/favorit-card.png" alt="">
                    </div>
                </div>
                <div class="popular-caption">
                 <h3><a href="product_details.html">Knitted Jumper</a></h3>
                 <div class="rating mb-10">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <span>$ 30.00</span>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="popular-img">
                <img src="img/gallery/arrival4.png" alt="">
                <div class="favorit-items">
                    <!-- <span class="flaticon-heart"></span> -->
                    <img src="img/gallery/favorit-card.png" alt="">
                </div>
            </div>
            <div class="popular-caption">
             <h3><a href="product_details.html">Knitted Jumper</a></h3>
             <div class="rating mb-10">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <span>$ 30.00</span>
        </div>
    </div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
        <div class="popular-img">
            <img src="img/gallery/arrival5.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="popular-img">
            <img src="img/gallery/arrival6.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
        <div class="popular-img">
            <img src="img/gallery/arrival7.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
    <div class="single-new-arrival mb-50 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
        <div class="popular-img">
            <img src="img/gallery/arrival8.png" alt="">
            <div class="favorit-items">
                <!-- <span class="flaticon-heart"></span> -->
                <img src="img/gallery/favorit-card.png" alt="">
            </div>
        </div>
        <div class="popular-caption">
         <h3><a href="product_details.html">Knitted Jumper</a></h3>
         <div class="rating mb-10">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <span>$ 30.00</span>
    </div>
</div>
</div>
</div>
<!-- Button -->
<div class="row justify-content-center">
    <div class="room-btn">
        <a href="catagori.html" class="border-btn">Browse More</a>
    </div>
</div>
</div>
</div>
<!--? New Arrival End -->
<!--? collection -->
<section class="collection section-bg2 section-padding30 section-over1 ml-15 mr-15" data-background="img/gallery/section_bg01.png">
    <div class="container-fluid"></div>
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">
            <div class="single-question text-center">
                <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">collection houses our first-ever</h2>
                <a href="about.html" class="btn class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s">About Us</a>
            </div>
        </div>
    </div>
</div>
</section>
<!-- End collection -->
<!--? Popular Locations Start 01-->
<div class="popular-product pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-product mb-50">
                    <div class="location-img">
                        <img src="img/gallery/popular-imtes1.png" alt="">
                    </div>
                    <div class="location-details">
                        <p><a href="product_details.html">Established fact that by the<br> readable content</a></p>
                        <a href="product_details.html" class="btn">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-product mb-50">
                    <div class="location-img">
                        <img src="img/gallery/popular-imtes2.png" alt="">
                    </div>
                    <div class="location-details">
                        <p><a href="product_details.html">Established fact that by the<br> readable content</a></p>
                        <a href="product_details.html" class="btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Locations End -->
<!--? Services Area Start -->
<div class="categories-area section-padding40 gray-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="img/icon/services1.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                    <div class="cat-icon">
                        <img src="img/icon/services2.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                    <div class="cat-icon">
                        <img src="img/icon/services3.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-cat wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                    <div class="cat-icon">
                        <img src="img/icon/services4.svg" alt="">
                    </div>
                    <div class="cat-cap">
                        <h5>Fast & Free Delivery</h5>
                        <p>Free delivery on all orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--? Services Area End -->
</main>

<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
</body>




<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }} "></script>
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }} "></script>
<script src="{{ asset('js/popper.min.js') }} "></script>
<script src="{{ asset('js/bootstrap.min.js') }} "></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="{{ asset('js/owl.carousel.min.js') }} "></script>
<script src="{{ asset('js/slick.min.js') }} "></script>
<script src="{{ asset('js/jquery.slicknav.min.js') }} "></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="{{ asset('js/wow.min.js') }} "></script>
<script src="{{ asset('js/animated.headline.js') }} "></script>
<script src="{{ asset('js/jquery.magnific-popup.js') }} "></script>
<script src="{{ asset('js/gijgo.min.js') }} "></script>

<!-- Nice-select, sticky,Progress -->
<script src="{{ asset('js/jquery.nice-select.min.js') }} "></script>
<script src="{{ asset('js/jquery.sticky.js') }} "></script>
<script src="{{ asset('js/jquery.barfiller.js') }} "></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('js/jquery.counterup.min.js') }} "></script>
<script src="{{ asset('js/waypoints.min.js') }} "></script>
<script src="{{ asset('js/jquery.countdown.min.js') }} "></script>
<script src="{{ asset('js/hover-direction-snake.min.js') }} "></script>

<!-- contact js -->
<script src="{{ asset('js/contact.js') }} "></script>
<script src="{{ asset('js/jquery.form.js') }} "></script>
<script src="{{ asset('js/jquery.validate.min.js') }} "></script>
<script src="{{ asset('js/mail-script.js') }} "></script>
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }} "></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('js/plugins.js') }} "></script>
<script src="{{ asset('js/main.js') }} "></script>

<!-- the application javascript -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- JS here -->

</html>
