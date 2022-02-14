@extends('layouts.app')

@section('content')
Shop


<br>


{{ (\Request::is('contact')) ? "true" : "false" }}


@endsection
