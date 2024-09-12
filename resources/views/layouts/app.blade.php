<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="Right Suppliers for hotels, restaurants, coffee shops and stores owners">

        @if(env('APP_ENV') === 'staging')
            <meta name="robots" content="noindex, nofollow">
        @endif

        @if(env('APP_ENV') === 'production')
            <meta name="robots" content="index, follow">
        @endif

        <link rel="icon" type="image/png" sizes="32x32" href="{{ url('/images/favicon-32x32.png') }}">

        <title>CezAgora Connect</title>

        @vite(['resources/css/app.css','resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
        <main>
            @include('layouts.sidebar')
        </main>
        {{--        @include('layouts.footer')--}}
        @livewireScripts
    </body>
</html>
