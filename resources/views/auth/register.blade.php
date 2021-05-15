@extends('layouts.main')

@section('main')
    <!-- Validation Errors -->
    <x-form-errors class="w40-center" :errors="$errors"/>
    <div class="content-box w40-center">
        <div class="content-box-header">
            <h1>{{ __('Register') }}</h1>
        </div>
        <div class="content-box-main">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="field">
                    <label class="label" for="name">{{ __('Username') }}</label>
                    <input id="name" class="input" type="text" name="name" value="{{ old('name') }}" required
                           autofocus/>
                </div>
                <div class="field">
                    <label class="label" for="email">{{ __('Email') }}</label>
                    <input id="email" class="input" type="email" name="email" value="{{ old('email') }}" required/>
                </div>
                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <input id="password" class="input" type="password" name="password" required
                           autocomplete="new-password"/>
                </div>
                <div class="field">
                    <label class="label" for="password-confirmation">{{ __('Confirm Password') }}</label>
                    <input id="password-confirmation" class="input" type="password" name="password_confirmation"
                           required/>
                </div>

                <div class="field">
                    <button class="button button-wide is-primary" type="submit">
                        {{ __('Register') }}
                    </button>

                    <a href="{{ route('login') }}" class="is-pulled-right align-text-button-base">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
