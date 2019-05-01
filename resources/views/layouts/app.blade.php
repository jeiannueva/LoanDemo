<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Five6') }}</title>

    <!-- Scripts -->
    <!--<script src="{{ asset('js/app.js') }}" defer></script>-->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
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
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                            <li class="nav-item" style="margin-right:10px">
                                <a href="{{ route('add_loan') }}"><button type="button" style="border-radius:20px"class="btn btn-primary btn">Apply for Loan</button></a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('lendMoney') }}">
                                <button type="button" style="border-radius:20px" class="btn btn-secondary btn">Lend Money</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('view_loan') }}"><button  type="button" style="border-radius:20px" class="btn btn-secondary btn">Ongoing Loans</button> </a>
                            </li>
                            <li class="nav-item dropdown" style="margin-left:60px">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div id="dropMe" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">{{ __('Profile') }}</a>
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

    <script type="text/javascript" src="{{ asset('js/js/jquery-3.3.1.min.js') }}"></script>
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

    <script type="text/javascript">
        $(".push").click(function(e) {
            e.preventDefault()
            $("#lender_id").val($(this).parent().parent().find(".details").text().trim())
            $("#loan_amount").val($('#amount').val().trim())
            $('#requestLoan').submit()
        });
    </script>
</body>
</html>
