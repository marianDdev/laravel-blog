@props([
    'metaTitle' => 'The Right Supplier | Best practices for suppliers in the hospitality businesses',
    'metaDescription' => 'Learn about the right suppliers for hotels, restaurants, coffee shops and stores owners',
    'metaKeywords' => 'default, supplier, horeca, hotels, restaurants, cafes',
    'ogUrl' => 'https://therightsupplier.com/',
    'ogImage' => 'https://therightsupplier.com/images/logo.png'
])

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{!! $metaTitle !!}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{--        I have to get google site verification; this is from rightsupplier--}}
        <meta name="google-site-verification" content="et7jNwFFATul7XdKscbz7EmFuGwsTcsnR2D8DstM7FU" />
        <meta name="description" content="{!! $metaDescription !!}">
        <meta name="keywords" content="{!! $metaKeywords !!}">

        <meta name="robots" content="index, follow">
        <meta name="robots" content="max-image-preview:large">
        <link rel="icon" type="image/png" sizes="48x48" href="{{ url('/images/favicon.png') }}">

        <meta property="og:locale" content="ro_RO" />
        <meta property="og:locale:alternate" content="en_GB" />
        <meta property="og:locale:alternate" content="en_US" />
        <meta property="og:site_name" content="The Right Supplier" />
        <meta property="og:title" content="{!! $metaTitle !!}">
        <meta property="og:description" content="{!! $metaDescription !!}">
        <meta property="og:type" content="article">
        <meta property="og:image" content="{!! $ogImage !!}">
        <meta property="og:image:width" content="2048">
        <meta property="og:image:height" content="1500">
        <meta property="og:url" content="{!! $ogUrl !!}">

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
