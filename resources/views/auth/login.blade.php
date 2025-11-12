@extends('layouts.app')

@section('content')

<style>
    body {
        background: linear-gradient(135deg, #4f46e5, #3b82f6);
        min-height: 100vh;
        font-family: 'Poppins', sans-serif;
    }

    .card {
        border-radius: 15px !important;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.25);
        animation: fadeIn 0.6s ease-in-out;
        border: none !important;
    }

    .card-header {
        background-color: #1e3a8a !important;
        color: white !important;
        font-size: 20px;
        font-weight: 600;
        text-align: center;
        border-radius: 15px 15px 0 0 !important;
    }

    .btn-primary {
        background-color: #2563eb !important;
        border: none !important;
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 10px;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #1d4ed8 !important;
        transform: scale(1.03);
    }

    .form-control {
        border-radius: 10px;
        padding: 12px;
    }

    .btn-link {
        color: #1e40af !important;
        font-weight: 500;
    }

    .btn-link:hover {
        color: #1d4ed8 !important;
        text-decoration: underline;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 90vh;">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="checkbox"
                                           name="remember"
                                           id="remember"
                                           {{ old('remember') ? 'checked' : '' }}>

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
