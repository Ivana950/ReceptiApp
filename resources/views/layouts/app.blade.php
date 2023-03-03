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

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/classy.nav.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('frontend/js/bootstrap/jquery/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap/plugins/plugins.js')}}"></script>
    <script src="{{ asset('frontend/js/active.js')}}"></script>
    <script src="{{ mix('js/app.js') }}" defer></script>
    

</head>
<body>
    <div id="app">
        <main class="py-4">
        <div>
            @yield('content')
        </div>
        </main>
    </div>

   
    
</body>
</html>
