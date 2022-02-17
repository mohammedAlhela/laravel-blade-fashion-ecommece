@extends('layouts.app')

@section('content')
    <aside id="colorlib-hero" class="breadcrumbs">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(
                    {{ asset('images/cover-img-1.jpg') }});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>Users</h1>
                                    <h2 class="bread"><span><a href="/">Home</a></span>
                                        <span>Register</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
    <div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="contact-wrap">
                        <h3>Make new account</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Name</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                           {{ $message }}
                                        </span>
                                    @enderror

                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Email</label>


                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                      {{ $message }}
                                    @enderror

                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                         {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>




                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="subject">Password Confirmation</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>


                            <div class="form-group text-left">
                                <input type="submit" value="Register User" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
