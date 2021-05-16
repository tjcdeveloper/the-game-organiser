@extends('layouts.main')

@section('main')
    <!-- Validation Errors -->
    <x-form-errors class="w40-center" :errors="$errors"/>

    <div class="content-box w40-center">
        <header class="content-box-header">
            <h1>{{ __('Reset password') }}</h1>
        </header>
        <main class="content-box-main">

            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="field">
                    <label class="label" for="email">{{ __('Email') }}</label>
                    <input id="email" class="input" type="email" name="email"
                           value="{{ old('email', $request->email) }}" required autofocus/>
                </div>
                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <input id="password" class="input" type="password" name="password" required
                           autocomplete="new-password"/>
                </div>
                <div class="field">
                    <label class="label" for="password-confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password-confirmation" class="input" type="password" name="password_confirmation"
                           required autocomplete="confirm-new-password"/>
                </div>

                <div class="field">
                    <button class="button is-fullwidth is-primary" type="submit">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </main>
    </div>
@endsection
