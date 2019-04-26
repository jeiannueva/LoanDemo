<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{!! asset('css/app.css') !!}" rel="stylesheet"></link>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                overflow: hidden;
            }

            .bg1{
                background-image: url({!! asset('images/bg3.jpg') !!});
                background-size:cover;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                padding: 20px
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
                padding: 20px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links>a:hover{
                color:#7d7777;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="bg1" style="width:100%;height:100%; position:absolute; z-index:1">

        </div>
        <div class="black-box" style="background-color:black; opacity:0.7; width:100%; height:100%; position:absolute;z-index:2">
        </div>
        <div class="flex-center position-ref full-height" style="position:relative;z-index:3;">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="">Borrow</a>
                    <a href="{{ route('loan') }}">{{ __('Lend Money') }}</a>
                    @auth
                        <a href="{{ url('/home') }}">Profile</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="top-left links">
                <img src="{!! asset('images/font2.png') !!}" width="40%">
            </div>
            <div class="content">
                <div class="" style="font-size:2em">
                    <b>NEED MONEY? WE GOT YOU COVERED.</b>
                </div>
                <div class="" style="font-size:1.3em">
                    You deserve more options for your financial needs.<br> On Five6 we connect you to hundreds of local bombays within arm's reach.
                </div>
                <br><br>
                <a href="{{ url('/loans/add') }}"><button type="button" class="btn btn-primary" style="font-size:1.3em; padding-left:60px;padding-right:60px;">Apply for Loans </button></a>

                <div class="links">
                    {{-- <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                </div>
            </div>
        </div>
    </body>
</html>
