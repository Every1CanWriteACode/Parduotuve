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
                <img src="{{url('/assets/img/logo.png')}}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        {{-- <div class="navbar-links"> --}}
                            <a class="navbar-brand navbar-links " href="#">home</a>
                            <a class="navbar-brand navbar-links" href="#">shop</a>
                            <a class="navbar-brand navbar-links" href="#">blog</a>
                            <a class="navbar-brand navbar-links" href="#">portfolio</a>
                            <a class="navbar-brand navbar-links" href="#">contact</a>
                        {{-- </div>    --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav margin-right">
                       <li class="nav-item">
                            <a class="nav-link shop-cart" href="">
                               @include('front.cart-svg')
                               <div id="cart-count">
                                   @include('front.mini-cart')
                               </div>
                            </a>
                       </li>
                    </ul>
                </div>
                
            </div>
        </nav>

        <main>

            @yield('content')
        </main>
    </div>
</body>
</html>
