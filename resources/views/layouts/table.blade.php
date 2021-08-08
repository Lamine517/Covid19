<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>VaccinCovid</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="jquery/jquery.js"></script> 
    <!-- carrousel -->

    <link rel="stylesheet" href="{{ asset('carrousel/assets/owl.carousel.min.css')}}">
    <script src="{{ asset('carrousel/owl.carousel.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/css/all.css')}}">

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{ asset('css/headerNavbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleNavbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styleTable.css')}}">
  
</head>
<body>
    <div id="app">
        <header class="header">
            <div class="container">
                <!-- logo -->
                <div class="header-content">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/logo-vaccin.png')}}" alt="" class="logo">
                    </a>
                
                    <!-- menu -->
                    <ul class="main-menu">
                        <li><a href="/rdvs">Accueil</a></li>
                        <li><a href="{{ url('/infos/') }}">Vaccin </a></li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">  {{ __('Se connecter en tant que administrateur') }}<i class="fa fa-user"></i> </a></li>
                        @endif

                      

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
        </header>
    </div>

    

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
