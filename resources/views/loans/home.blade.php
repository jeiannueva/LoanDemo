@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:600" rel="stylesheet">

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-center">
            <div class="col-5" style="padding-right:0px">
                <img src="{!! asset('images/ads.png') !!}">
            </div>
            <div class="col" style="padding-left:0px">
                <h1 style="font-family: 'Poppins', sans-serif; margin-top:100px">Earn Lots!</h1>
                <br>
                <h4 style="font-family: 'Montserrat', sans-serif;">By turning on lending you will get loan requests from around the globe and earn lots! Join your fellow bombays now!</h4>
                <br><br>
                <a href="{{ url('') }}"><button type="button" class="btn btn-primary" style="font-size:1.3em; padding-left:60px;padding-right:60px;">Turn on lending </button></a>
            </div>
    </div>
</div>
@endsection
