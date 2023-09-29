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
        .app_page {
            display: flex;
        }

        nav.navbar {
            display: flex;
            background-color: #5885af !important;
            height: 100vh;
        }

        .navbar__item {
            color: #c3e0e5 !important;
            font-weight: bold;
            text-decoration: none;
            font-size: x-large;
            padding: 10px;
        }

        .navbar__list {
            list-style-type: none;
            transition: background-color 0.01s;
        }

        .navbar__list:hover {
            background-color: #274472;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,1), 0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .navbar__side {
            width: 20%;
        }

        .pages {
            display:flex;
            flex-direction: column;
            align-items: center;
            justify-content:center;
            padding: 0;
        }

        .logo {
            width: 50px;
        }

        .logo__container {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin-top: 15%;
        }
        div#navbarSupportedContent.collapse.navbar-collapse {
            display: flex;
            flex-direction: column;
        }

        li.nav-item.dropdown {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            text-align : center;
        }

        .py-4 {
            flex: 1;
            background-color: #c3e0e5;
            color: #274472;
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

    </style>
</head>
<body>
    <div id="app">
        <div class="app_page">
            <aside class="navbar__side">
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

                                <ul class="pages">
                                    <li class="navbar__list">
                                    <a class="nav-link navbar__item" href="/dashboard">{{ __('Dashboard') }}</a>
                                    </li>
                                    <li class="navbar__list">
                                    <a class="nav-link navbar__item" href="/modules">{{ __('Modules') }}</a>
                                    </li>
                                    <li class="navbar__list">
                                    <a class="nav-link navbar__item" href="/milestones">{{ __('Milestones') }}</a>
                                    </li>
                                    <li class="navbar__list">
                                    <a class="nav-link navbar__item" href="/database">{{ __('Database') }}</a>
                                    </li>
                                    
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
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle navbar__item" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false" v-pre>
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
            </aside>
        
    
            <main class="py-4">
                    @yield('content')
            </main>

        </div>

        <footer>
            NBS | EOTS v1.1.1
        </footer>

    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>
