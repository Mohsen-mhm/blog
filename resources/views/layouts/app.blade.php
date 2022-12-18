<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Links -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="/plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/fontawesome.min.css">
</head>
<body dir="rtl">
<div id="app">
    @include('layouts.navigation')
    @yield('header')
    <div class="container pt-4">
        <div class="row">
            <!-- Blog entries-->
            @yield('content')
            <!-- Side widgets-->
            @include('layouts.sidebar')
        </div>
    </div>
    @include('layouts.footer')
</div>
</body>
<script src="{{ mix('js/app.js') }}" defer></script>
<script src="/plugin/jquery/jquery.min.js" defer></script>
<script src="/plugin/bootstrap/js/bootstrap.bundle.min.js" defer></script>
<script src="/plugin/popper/popper.min.js" defer></script>
@yield('script')
</html>
