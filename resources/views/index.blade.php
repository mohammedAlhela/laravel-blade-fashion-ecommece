@extends('layouts.app')

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                @foreach ($sliders as $index => $slider)
                    <li style="background-image: url({{ $slider->images->first()->image }});">
                        <div class="overlay"></div>
                        <div class="container-fluid">
                            <div class="row">
                                @if ($index % 2 == 0)
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1 class="head-1">Huge</h1>
                                                    <h2 class="head-2">Sale</h2>
                                                    <h2 class="head-3">45% off</h2>


                                                            <p class="category text-center"><span>New stylish shirts, coats
                                                                </p>

                                                    <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
                                        <div class="slider-text-inner">
                                            <div class="desc">
                                                <h1 class="head-1">Hot </h1>
                                                <h2 class="head-2">Deals</h2>
                                                <h2 class="head-3">60% off</h2>
                                                <p class="category text-center"><span>New stylish clothes
                                                        </span></p>
                                                <p><a href="#" class="btn btn-primary">Shop Collection</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>



    <div id="colorlib-featured-product">
        <div class="  categories-container">
            <div class="row">
                <div class="col-md-6">
                    <a href="shop.html" class="f-product-1"
                        style="background-image: url(images/categories/607a8724ea9b7d74701a3a68286cd4a9.jpg);">
                        <div class="desc">
                            <h2>Fahion <br>for <br> Tops</h2>
                        </div>
                    </a>
                </div>


                <div class="col-md-6">
                    <div class="row">


                        @foreach ($categories as $category)
                        <div class="col-md-6">
                            <a href="" class="f-product-2" style="background-image: url({{ $category->image }});">
                                <div class="desc">
                                    <h2>{{ $category->name }} <br> {{ count( $category->products)  }}  <br> item</h2>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>New Arrival</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">



                @foreach ($newArrivalProducts as $product)

                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url({{ $product->preview_image }});">
                            <p class="tag"><span class="new">New</span></p>
                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="cart.html"><i
                                                class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>

                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">  {{ $product->name }} </a></h3>
                            <p class="price"><span>  {{ $product->selling_price }}</span></p>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>
    </div>
    <div id="colorlib-intro" class="colorlib-intro" style="background-image: url(images/cover-img-1.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="intro-desc">
                        <div class="text-salebox">
                            <div class="text-lefts">
                                <div class="sale-box">
                                    <div class="sale-box-top">
                                        <h2 class="number">45</h2>
                                        <span class="sup-1">%</span>
                                        <span class="sup-2">Off</span>
                                    </div>
                                    <h2 class="text-sale">Sale</h2>
                                </div>
                            </div>
                            <div class="text-rights">
                                <h3 class="title">Just hurry up limited offer!</h3>
                                <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large
                                    language ocean.</p>
                                <p><a href="shop.html" class="btn btn-primary">Shop Now</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="colorlib-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
                    <h2><span>Our Products</span></h2>
                    <p>We love to tell our successful far far away, behind the word mountains, far from the countries
                        Vokalia and Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <div class="row">

                @foreach ($myProducts as $product)

                <div class="col-md-3 text-center">
                    <div class="product-entry">
                        <div class="product-img" style="background-image: url({{ $product->preview_image }});">

                            @if ($product->selling_price > 200)
                            <p class="tag"><span class="new">New</span></p>
                            @else

                            <p class="tag"><span class="sale">Sale</span></p>
                            @endif




                            <div class="cart">
                                <p>
                                    <span class="addtocart"><a href="cart.html"><i
                                                class="icon-shopping-cart"></i></a></span>
                                    <span><a href="product-detail.html"><i class="icon-eye"></i></a></span>
                                    <span><a href="#"><i class="icon-heart3"></i></a></span>

                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="shop.html">  {{ $product->name }} </a></h3>
                            <p class="price"><span>  {{ $product->selling_price }}</span></p>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>





    <div class="card tet-center">
        <img src="{{ substr($sliders[0]->images->first()->image, 2) }}" alt="">

    </div>
@endsection
