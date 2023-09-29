<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">

      <title>{{ config('app.name', 'Laravel') }}</title>

      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.bunny.net">
      <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">

      <!-- Include Bootstrap JS -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js"></script>


      <!-- Scripts -->
      @vite(['resources/sass/app.scss', 'resources/js/app.js'])

      <!-- Stylesheet -->
      <style>
        main.py-4 {
            display: flex;
            /* align-items: center; */
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

        div.card {
            display: flex;
            flex-direction: column;
            background-color: #274472;
            padding: 20px 0px;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,1),0 6px 20px 0 rgba(0,0,0,0.19);
        }

        .card__logo {
            width: 150px;
        }

        .logoName {
            color: #c3e0e5;
            font-weight: bold;
        }

        .card__logoContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        div.row.mb-3.inputField {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        div.col-md-8.offset-md-4 {
            display: flex;
            flex-direction: column;
            margin: 0;
        }

        div.row.mb-0 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        div.row.mb-3 {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        div.col-md-6.offset-md-4.rememberMe {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .form-check-label {
            color: #c3e0e5;
        }

        a.btn.btn-link {
            color: #c3e0e5;
        }

        button.btn.btn-primary {
            color:#c3e0e5;
            background-color: #5885af;
            border: #5885af;
            transition: background-color 0.01s;
        }

        button.btn.btn-primary:hover {
            color: #274472;
            background-color: #c3e0e5;
        }

        /* Register */
        .card-header {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #c3e0e5;
        }

        label.col-md-4.col-form-label.text-md-end {
            color: #c3e0e5;
        }

        div.col-md-6.offset-md-4.register {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 30px 0 0 0;
        }

    </style>
  </head>
  <body>
    <div id="app">

      <header>

        <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
          <div class="container-fluid">
              
            <div class="logo__container">
                <img src="{{ asset('images/logo.png') }}" alt="ABC Tech Logo" class="logo">
                    <a class="navbar-brand navbar__item" href="{{ url('/') }}">
                        {{ config('app.name', 'ABC Tech Inc.') }}
                    </a>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
