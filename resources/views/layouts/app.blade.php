<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Logics') }}
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
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            <!--@if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif-->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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


    <!DOCTYPE html>     
            <html lang="zxx">
            <head>
                <title>AutoLubricantes | CmString</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta charset="utf-8">
                <meta name="keywords" content="Login AGROSELVA">
                <script>
                    addEventListener("load", function () {
                        setTimeout(hideURLbar, 0);
                    }, false);

                    function hideURLbar() {
                        window.scrollTo(0, 1);
                    }
                </script>
                <link rel="stylesheet" href="{{asset("assets/Login/css/style.css")}}" type="text/css" media="all">
                <link rel="stylesheet" href="{{asset("assets/Login/css/font-awesome.min.css")}}" type="text/css" media="all">
                <link href="//fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i" rel="stylesheet">
                <link href="//fonts.googleapis.com/css?family=Mukta:200,300,400,500,600,700,800" rel="stylesheet">

            <style>
                
                .required input{ 
                content:"*"; 
                }

                #contenedor_carga{
                    background-color: rgba(0,0,0);
                    height: 100%;
                    width: 100%;
                    position:fixed;
                    -webkit-transition:all 1s ease;
                    -o-transition:all 1s ease;
                    transition: all 1s ease;
                    z-index: 100000;
                }

                #carga{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    width: 180px;
                    height: 180px;

                    border:solid 6px transparent;
                    border-top-color:#1c69b0;
                    border-left-color:#1c69b0;
                    border-radius: 50%;

                    animation: loader 1s linear infinite;
                }

                #carga2{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    width: 120px;
                    height: 120px;
                    color:white;

                    border:solid 6px transparent;
                    border-top-color:#d62e23;
                    border-left-color:#d62e23;
                    border-radius: 50%;
                    animation: loader2 1.2s linear infinite;
                }

                #carga3{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    margin: auto;
                    width: 60px;
                    height: 35px;
                    color:white;

                }

                @keyframes loader {
                    0%{
                        transform: rotate(0deg);
                    }
                    100%{
                        transform:  rotate(360deg);
                    }
                }
                @keyframes loader2 {
                    0%{
                        transform: rotate(0deg);
                    }
                    100%{
                        transform:  rotate(-360deg);
                    }
                }
            </style>
            </head>
            <!-- //Head -->
            <!-- Body -->

            <body>
            <div id="contenedor_carga">
                    <div id="carga"></div>
                    <div id="carga2"></div>
                    <div id="carga3">
                        <h6>Cargando...</h6>
                    </div>
                </div>
            <section class="main">
                <div class="layer">
                    
                    <div class="bottom-grid1">
                        <div class="links">

                        </div>
                        <div class="copyright">
                            <p>
                                <a href="http://www.aster.com.gt">©Aster 2021</a>
                            </p>
                        </div>
                    </div>
                    <div class="content-w3ls">
                        <div class="text-center icon">
                            <img src="{{asset("assets/lte/dist/img/logo_logics_2021.JPG")}}" style="border-radius: 50%;" width="55%" >
                        </div>
                        <div class="content-bottom">
                            <form action="#" method="post" >
                                <div class="field-group">
                                    <span class="fa fa-user" aria-hidden="true"></span>
                                    <div class="wthree-field">
                                        <input name="Usuario" id="Usuario" type="text" value="" placeholder="Usuario" required>
                                    </div>
                                </div>
                                <div class="field-group">
                                    <span class="fa fa-lock" aria-hidden="true"></span>
                                    <div class="wthree-field">
                                        <input name="Password" id="Password" type="Password" placeholder="Contraseña" required>
                                    </div>
                                </div>
                                
                                
                                <div class="wthree-field">
                                    <button type="submit" class="btn" style="background-color:#1e426b;">Ingresar</button>
                                </div>
                                <ul class="list-login">
                                    <li class="switch-agileits">
                                        <label class="switch">
                                            <input type="checkbox">
                                            <span class="slider round"></span>
                                            Recordarme
                                        </label>
                                    </li>
                                    <li>
                                        <a href="#" class="text-right">Olvido su contraseña?</a>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </section>

            </body>
            <script>
                window.onload = function(){
                    var contenedor = document.getElementById('contenedor_carga');
                    contenedor.style.visibility = 'hidden';
                    contenedor.style.opacity = '0';
                }
            </script>

</body>
</html>
