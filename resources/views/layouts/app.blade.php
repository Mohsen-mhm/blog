<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@lang('messages.learn.asan') | @lang('messages.home')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <livewire:styles/>
    <link rel="stylesheet" href="/vendor/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body @if(app()->getLocale() == "fa") dir="rtl" @else dir="ltr" @endif>

<livewire:layouts.header/>

{{ $slot }}

<livewire:layouts.footer/>

<livewire:scripts/>
<!-- Additional Scripts -->
<script>
    document.addEventListener('livewire:load', function () {
        Livewire.on('themeToggled', mode => {
            if (mode === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        });
    });
</script>
</body>
</html>
