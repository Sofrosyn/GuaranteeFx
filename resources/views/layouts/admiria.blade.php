<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>
        @isset($title)
            {{ $title }} | {{ config('app.name') }}
        @else
            @hasSection('title')@yield('title') | @endif{{ config('app.name') }}
        @endisset
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        content="{{ config('app.name') }} is an all in ine solution for job seekers, employers and human resource managers"
          name="description">
    <meta content="{{ config('app.name') }}" name="author">
    <link rel="icon" type="image/png" href="{{ asset('images/hrplug.png') }}" />

    <link href="{{ asset('css/dashboard_bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard_icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard.css') }}"  rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    @livewireScripts

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    @stack('head')

</head>

<body data-layout="horizontal">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

@yield('page')

<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('vendor/dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('vendor/dashboard/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('vendor/dashboard/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('js/dashboard.js') }}"></script>
@stack('js')

</body>
</html>
