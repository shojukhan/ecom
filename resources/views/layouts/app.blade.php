<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ecom') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('layouts.inc.header')
        <main class="py-4">
            @yield('content')
        </main>

        @include('layouts.inc.footer')
    </div>
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://kit.fontawesome.com/d13ba7a991.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
</body>
</html>