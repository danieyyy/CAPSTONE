<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ABC Tech Inc.') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Stylesheet -->
    <style>
        main.py-4 {
            display: flex;
            justify-content: center;
            height: 100vh;
            background-color: #c3e0e5;
        }

        nav.navbar {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #5885af !important;
        }

        .navbar__item {
            color: #c3e0e5 !important;
            font-weight: bold;
        }

        .logo {
            width: 50px;
        }

        .logo__container {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        footer {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c3e0e5;
            background-color: #5885af;
            padding: 5px 0px;
            font-weight: bold;
        }

        /* Homepage */
        .content__iconContainer {
            display: flex;
            /* flex-direction: column; */
            align-items: center; 
            justify-content: center;
        }

        .home__content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #274472;
        }

        h1.content__title {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding-top: 50px;
            font-weight: bold;
            margin: 0;
           
        }

        p.content__welcome {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-size: x-large;
            font-weight: bold;
            margin: 2% 10%;
        }

        p.content__text {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin: 2% 10%;
        }

        .iconItem {
            margin: 2% 1%;
        }

        .icon__unit {
            flex: 1;
            margin: 2% 1%;
            background-color: #41729f;
            border-radius: 10px;
            padding: 10px;
            transition: background-color 0.01s;
        }

        .icon__unit:hover {
            background-color: #274472;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,1), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        #icon__dashboard {
            float: left;
            width: 150px;
        }
        
        #icon__modules {
            float: left;
            width: 150px;
        }
        
        #icon__milestones {
            float: left;
            width: 150px;
        }
        
        #icon__database {
            float: left;
            width: 150px;
        }
        
        #icon__feedback {
            float: left;
            width: 150px;
        }

        @media screen and (max-width: 700px) {
        .content__iconContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .py-4 {
            height: 100vh;
            overflow: scroll;
        }

    </style>
</head>
<body>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="logo__container">
                        <img src="{{ asset('images/logo.png') }}" alt="ABC Tech Logo" class="logo">
                        <a class="navbar-brand navbar__item" href="{{ url('/home') }}">
                            {{ config('app.name', 'ABC Tech Inc.') }}
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav me-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link navbar__item" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link navbar__item" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle navbar__item" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                </div>
            </nav>
        </header>
    
        <main class="py-4">
                @yield('content')
        </main>

        <footer>
            NBS | EOTS v1.1.1
        </footer>

    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
