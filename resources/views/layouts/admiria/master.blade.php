<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>
        @isset($title)
            {{ $title }} - {{ config('app.name') }}
        @else
            @hasSection('title')@yield('title') - @endif{{ config('app.name') }}
        @endisset
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ config('app.name') }}" name="author">
    <link rel="icon" type="image/png" href="{{ asset('images/hrplug.png') }}" />

    <link href="{{ asset('css/dashboard_bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard_icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/dashboard.css') }}"  rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    @livewireStyles

    @livewireScripts

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('head')

</head>

<body data-sidebar="dark">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>


<div id="layout-wrapper">

    @include('layouts.admiria.topbar')

    @include('layouts.admiria.left_sidebar')

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                @yield('breadcrumb')
                @yield('content')
            </div>
        </div>
        @include('layouts.admiria.footer')
    </div>
</div>

<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('vendor/dashboard/libs/metismenu/metisMenu.min.js') }}"></script>
<script src="{{ asset('vendor/dashboard/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('vendor/dashboard/libs/node-waves/waves.min.js') }}"></script>

<script src="{{ asset('js/dashboard.js') }}"></script>
@stack('js')

</body>
</html>
