@extends('layouts.main')

@section('main')
    <!-- Session Status -->
    <x-auth-session-status class="w40-center"/>

    <!-- Validation Errors -->
    <x-form-errors class="w40-center" :errors="$errors"/>

    <div class="content-box w40-center">
        <header class="content-box-header">
            <h1>{{ __('Reset password') }}</h1>
        </header>
        <main class="content-box-main">
            <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

            <form method="POST" action="{{ route('password.email') }}">
            @csrf

                <!-- Email Address -->
                <div class="field">
                    <label class="label" for="email">{{ __('Email') }}</label>
                    <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email"/>
                </div>

                <div class="field">
                    <button class="button is-fullwidth is-primary" type="submit">
                        {{ __('Email Password Reset Link') }}
                    </button>
                </div>
            </form>
        </main>
@endsection
