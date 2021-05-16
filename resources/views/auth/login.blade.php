@extends('layouts.main')

@section('main')

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')"/>

    <!-- Validation Errors -->
    <x-form-errors class="w40-center" :errors="$errors"/>

    <div class="content-box w40-center">
        <div class="content-box-header">
            <h1>Log In</h1>
        </div>
        <div class="content-box-main">
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <!-- Email Address -->
                <div class="field">
                    <label class="label" for="email">Email</label>
                    <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" required
                           autofocus/>
                </div>

                <!-- Password -->
                <div class="field">
                    <label class="label" for="password">Password</label>
                    <input id="password" class="input" type="password" name="password" required
                           autocomplete="current-password"/>
                </div>

                <!-- Remember Me -->
                <div class="field">
                    <div class="control">
                        <label for="remember-me" class="checkbox">
                            <input id="remember-me" type="checkbox" name="remember" />
                            Remember me
                        </label>
                    </div>
                </div>

                <div class="field">
                    <button class="button button-wide is-primary" type="submit">
                        Log in
                    </button>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="is-pulled-right align-text-button-base">
                            Forgot your password?
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
