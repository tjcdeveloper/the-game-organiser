@extends('layouts.main')

@section('main')
    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors"/>

    <div class="content-box w40-center">
        <div class="content-box-header">
            <h1>Confirm Password</h1>
        </div>
        <div class="content-box-main">
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="field">
                    <label class="label" for="password">Password</label>
                    <input id="password" class="input" type="password" name="password" required
                           autocomplete="current-password"/>
                </div>
                <div class="field">
                    <button class="button button-wide is-primary" type="submit">
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
