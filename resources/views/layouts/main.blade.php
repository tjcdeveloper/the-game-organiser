<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'The Game Organiser') }} - {{ $title }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body class="grid-main-structure">
    <nav class="user-card">
        @auth
            @include('components.user-card')
        @else
            @include('components.guest-card')
        @endauth
    </nav>
    <header>
        <img src="/images/the-game-organiser-logo-alpha.png" alt="The Game Organiser Alpha Test Logo">
    </header>
    <nav class="nav-bar">
        <!-- TODO: NAV BAR -->
        NAV BAR
    </nav>
    <main>
        @yield('main')
    </main>
    <footer class="text-center">
        Copyright &copy; 2021 Tony Christopher. All rights reserved.
    </footer>
</body>
</html>
