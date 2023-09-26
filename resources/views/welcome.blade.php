<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABC Tech Inc.</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html {
                background-color: #c3e0e5;
            }

            body {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            .welcome__title {
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                font-family: 'Kumbh Sans', sans-serif;
                font-size: 50px;
                color:#274472;
            }

            .welcome__logo {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-family: 'Kumbh Sans', sans-serif;
                font-weight: bold;
                font-size: 25px;
                color: #274472;
            }

            .welcome__main {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .welcome__navbar {
                margin: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .logo {
                width: 200px;
            }

            .login__landingPage{
                text-decoration: none;
                font-family: 'Kumbh Sans', sans-serif;
                font-weight: bold;
                font-size: 25px;
            }

            .register__landingPage {
                text-decoration: none;
                font-family: 'Kumbh Sans', sans-serif;
                font-weight: bold;
                font-size: 25px;
            }

            .welcome__footer {
                font-weight: bold;
                color: #274472;
                margin: 10px;
            }
            
            .login__items{
                margin: 20px;
                color: #5885af;
                transition: background-color 0.01s;
            }

            .login__items:hover {
                color: #c3e0e5;
                background: #274472;
                border: 0.5px solid #274472;
                border-radius: 10px;
                padding: 10px;
                margin: 9px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,1), 0 6px 20px 0 rgba(0,0,0,0.19);
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="welcome__main">

            <div class="welcome__logo">
                <img src="{{ asset('images/logo.png') }}" alt="ABC Tech Logo" class="logo">
                <p>ABC Tech Inc.</p>
            </div>

            <div class="welcome__title">
                Employee Onboarding<br/>and Training System
            </div>

            @if (Route::has('login'))
                <div class="welcome__navbar">
                    @auth
                        <a href="{{ url('/home') }}" class="login__successHome login__items">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="login__landingPage login__items">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="register__landingPage login__items">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
        <div class="welcome__footer">
            Powered by NBS
        </div>
    </body>
</html>
