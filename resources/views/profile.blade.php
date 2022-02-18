@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if (Auth::check())
                            <p>
                                {{ auth()->user()->name }}
                            </p>
                            <br>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf

                                <button class="btn btn-primary "> Logout</button>
                            </form>
                        @else
                            <p> you are not logged in </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
