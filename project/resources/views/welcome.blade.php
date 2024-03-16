<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased flex items-center justify-center h-screen">
        <div>
            <h1 class="mb-2 text-3xl font-bold">Welcome to HowToFixWeb.Online</h1>
            <div class="flex">
                <a class="mr-2 py-2 px-4 rounded-lg bg-black text-white font-bold" href="{{ route('login') }}">Login</a>
                <a class="py-2 px-4 rounded-lg bg-black text-white font-bold" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </body>
</html>
