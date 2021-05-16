@extends('layouts.main')

@section('main')
    <div class="content-box w40-center">
        <header class="content-box-header">
            <h1>{{ __('Verify Email Address') }}</h1>
        </header>
        <main class="content-box-main">
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="field">
                        <button class="button is-fullwidth is-primary" type="submit">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
@endsection
