<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->


    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/classy.nav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/plugins/plugins.js')}}"></script>
    <script src="{{ asset('frontend/js/active.js')}}"></script>

</head>
<body>
    <header class="header-area">
    <div class="delicious-main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light classy-navbar justify-content-between" id="deliciousNav">
                <a class="nav-brand" href="{{ url('/user') }}"><img src="img/core-img/logo.png" alt=""></a>

                <div class="collapse navbar-collapse classynav" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li>
                            <a href="{{ url('/user') }}">Naslovnica</a>
                        </li>
                        <li>
                            <a href="{{ url('/user/blog-post') }}">Recepti</a>
                        </li>
                        <li>
                            <a href="{{ url('/user/about') }}">O nama</a>
                        </li>
                        <li>
                            <a href="{{ url('/user/contact') }}">Kontakt</a>
                        </li>
                    </ul>

                    <a href="{{ url('/user/create') }}" class="btn btn-outline-success" role="button"
                        aria-disabled="true">Objavi</a>
                        
                    <div style="padding: 10px">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
            </nav>
        </div>
    </header>
</body>
</html>
