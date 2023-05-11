@extends('layout')

@section('content')
    <section class="login">
        <h2 id="h2login">{{ __('Login') }}</h2>
        <form method="POST" action="{{ route('login') }}" id="FormLogin">

            @csrf

            <label for="email" class="col-md-4 col-form-label text-md-end"></label>

            <input id="InputMailLogin" type="email" placeholder="{{ __('Email Address') }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror

            <label for="password" class="col-md-4 col-form-label text-md-end"></label>

            <input id="InputPassLogin" type="password" placeholder="{{ __('Password') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror



            <button id="InputSubFormLogin" type="submit" class="btn btn-primary btnConfirm">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link forgot" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

        </form>
    </section>
@endsection
