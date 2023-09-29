@extends('layouts.app')

<style>
    .py-4{
        align-items: center;
    }
    label.login_text {
        display: flex;
        justify-content: center;
        align-content: center;
        color: c3e0e5;
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
</style>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="card__logoContainer">
                            <img src="{{ asset('images/logo.png') }}" alt="ABC Tech Logo" class="card__logo">
                            <p class="logoName">ABC Tech Inc.</p>
                        </div>

                        <div class="row mb-3 inputField">
                            <label class="login_text mb-2"><b>{{ __('E-Mail Address') }}</b></label>
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('E-Mail Address') }}</label> --}}
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 inputField">
                            <label class="login_text mb-2"><b>{{ __('Password') }}</b></label>
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4 rememberMe">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
