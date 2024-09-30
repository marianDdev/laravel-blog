<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="et7jNwFFATul7XdKscbz7EmFuGwsTcsnR2D8DstM7FU" />
        <meta name="description" content="Right Suppliers for hotels, restaurants, coffee shops and stores owners">

        <meta name="robots" content="index, follow">
        <title>Insights</title>
        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        @include('layouts.navigation.index')
        <main>
            {{ $slot }}
        </main>
        @include('layouts.footer')
        @livewireScripts
    </body>
</html>
