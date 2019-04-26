<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

<<<<<<< HEAD
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
=======
    <title>{{ config('app.name', 'Five6') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->
>>>>>>> matthew

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<<<<<<< HEAD

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
=======
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style media="screen">
        .nav-link{
            color:white !important
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background:black;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{!! asset('images/font2.png') !!}" width="40%">
>>>>>>> matthew
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
<<<<<<< HEAD
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('loan') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('Loans') }} <span class="caret"></span>
                                    </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('add_loan') }}">{{ __('Request Loan') }}</a>                  
                                {{-- <a class="dropdown-item" href="{{ route('edit_loan') }}">{{ __('Edit Loan') }}</a> --}}
                                <a class="dropdown-item" href="{{ route('view_loan') }}">{{ __('All Loan') }}</a>
                            </div>
                        </li>
=======
>>>>>>> matthew
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
<<<<<<< HEAD
=======

>>>>>>> matthew
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
<<<<<<< HEAD
                            <li class="nav-item dropdown">
=======
                            <li class="nav-item" style="margin-right:10px">
                                <a href="{{ url('/loans/add') }}"><button type="button" style="border-radius:20px"class="btn btn-primary btn">Apply for Loan</button></a>
                            </li>
                            <li class="nav-item">
                                <button type="button" style="border-radius:20px" class="btn btn-secondary btn">Lend Money</button>
                            </li>
                            <li class="nav-item dropdown" style="margin-left:60px">
>>>>>>> matthew
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

<<<<<<< HEAD
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
=======
                                <div id="dropMe" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('add_loan') }}">{{ __('Apply Loan') }}</a>
                                    {{-- <a class="dropdown-item" href="{{ route('edit_loan') }}">{{ __('Edit Loan') }}</a> --}}
                                    <a class="dropdown-item" href="{{ route('view_loan') }}">{{ __('All Loan') }}</a>
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Profile') }}</a>
>>>>>>> matthew
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<<<<<<< HEAD
=======

    <script type="text/javascript">
        var checker = 0;
        $("#navbarDropdown").click(function(){
            $("#dropMe").attr("style", "display:block")
            console.log(checker)
            checker =1
        });

        $(".py-4").click(function(){
            if(checker == 1){
                $("#dropMe").attr("style", "display:none")
                checker=0
            }
        });
    </script>
>>>>>>> matthew
</body>
</html>
