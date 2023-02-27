<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <link href="/css/main.css" rel="stylesheet"> --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @stack('style')

    </head>
    <body>

     @yield('content')
        <nav>
            <div class="wrapper-logo">
                <div> <a href="/">Logo</a></div>
            </div>
            <div class="wrapper-mainlinks">
                <a href="/pizzas/create">Menu</a>
                <a href="/pizzas/create">Order</a>
                <a href="/pizzas/create">About us</a>
            </div>
            <div class="wrapper-socialmedia">
                <button><x-fab-facebook /></button>
                <button><x-fab-instagram /></button>
            </div>

        </nav>

     {{-- <footer>
        copyright 2023
     </footer> --}}
</body>
</html>
