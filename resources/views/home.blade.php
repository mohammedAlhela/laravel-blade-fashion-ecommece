@extends('layouts.app')

@section('page_title')
Istanbuliat Home Page

@endsection


@section('content')
    <div class="container">
        <div id="page">
            <main>
                @yield('content')
            </main>
        </div>
    </div>
@endsection
