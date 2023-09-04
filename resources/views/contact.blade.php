<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact Me</title>

        <!-- Fonts -->
        <link rel="icon" type="image/png" href="{{ asset('images/logo2.png') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body class="antialiased">

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="label">
                <p>This is my website made with <a href="https://laravel.com/" target="_blank"c><strong>Laravel</strong></a></p>
            </div>

            <div class="nav">
                <!-- Logo -->
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/logo2.png') }}" alt="logo" width="100"></a>
                </div>
                <div>
                    <ul class="navbar">
                        <li class="navitem"><a href="/">Home</a></li>
                        <li class="navitem"><a href="/about">About</a></li>
                        <li class="navitem"><a href="/works">Works</a></li>
                        <li class="navitem"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
            </div>

            <div>
                
            </div>
        </div>
    </body>
</html>
