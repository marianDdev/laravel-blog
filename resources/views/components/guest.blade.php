<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="et7jNwFFATul7XdKscbz7EmFuGwsTcsnR2D8DstM7FU" />
        <meta name="robots" content="noindex, nofollow">

        <meta name="description" content="Blog">

        @if(env('APP_ENV') === 'staging')
            <meta name="robots" content="noindex, nofollow">
        @endif

        @if(env('APP_ENV') === 'production')
            <meta name="robots" content="index, follow">
        @endif

        <title>Blog</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <main>
            {{ $slot }}
        </main>
        @livewireScripts
    </body>
</html>
