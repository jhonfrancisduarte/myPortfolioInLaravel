<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About Me</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <!-- Include Bootstrap CSS (place this in your HTML's head section) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">

    </head>
<body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <div class="nav">
                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/logo2.png') }}" alt="logo" width="100"></a>
                </div>
                <!-- Navigation Menu -->
                <div class="menu">
                    <ul class="navbar">
                        <li class="navitem"><a href="/">Home</a></li>
                        <li class="navitem" id="active"><a href="/about">About</a></li>
                        <li class="navitem"><a href="/works">Works</a></li>
                        <li class="navitem"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Burger Menu Icon -->
            <div class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            
            <!-- Burger Menu (Initially hidden) -->
            <div class="burger-menu">
                <ul class="burger-menu-navbar">
                    <li class="navitem"><a href="/">Home</a></li>
                    <li class="navitem" id="active"><a href="/about">About</a></li>
                    <li class="navitem"><a href="/works">Works</a></li>
                    <li class="navitem"><a href="/contact">Contact</a></li>
                </ul>
            </div>

        </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
