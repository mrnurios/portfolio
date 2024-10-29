<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Include AOS CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/aos/aos.css') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .glow::before {
            top: var(--y);
            left: var(--x);
            width: var(--size);
            height: var(--size);
        }
    </style>
</head>

<body x-data="{ scrollY: 0 }" @scroll.window="scrollY = window.scrollY"
    class='scroll-smooth font-white relative bg-neutral-900 '>
    @include('includes.header')
    @include('includes.hero')

    @yield('content')

    @include('includes.content')

    @include('includes.footer')

    <!-- Include AOS JavaScript -->
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>

    <!-- Initialize AOS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init();
        });
    </script>
</body>

</html>
