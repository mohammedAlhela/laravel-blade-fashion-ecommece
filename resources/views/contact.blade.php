@extends('layouts.app')

@section('content')
Contact

{{ (\Request::is('contact')) ? "true" : "false" }}
@endsection
