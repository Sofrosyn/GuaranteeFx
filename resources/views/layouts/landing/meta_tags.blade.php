<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#f2f3f5" />
<!-- Site Properties -->
<title>
    @isset($title)
        {{ $title }} | {{ config('app.name') }}
    @else
        @hasSection('title')@yield('title') | @endif{{ config('app.name') }}
    @endisset
</title>
<!-- Critical preload -->
<link rel="preload" href="{{ asset('landing/js/vendors/uikit.min.js') }}" as="script">
<link rel="preload" href="{{ asset('landing/css/vendors/uikit.min.css') }}" as="style">
<link rel="preload" href="{{ asset('landing/css/style.css') }}" as="style">
<!-- Icon preload -->
<link rel="preload" href="fonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="fonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin>
<!-- Font preload -->
<link rel="preload" href="{{ asset('landing/fonts/inter-v2-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('landing/fonts/inter-v2-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('landing/fonts/inter-v2-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
<!-- Favicon and apple icon -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon.png">
<!-- CSS -->
<link rel="stylesheet" href="{{ asset('landing/css/vendors/uikit.min.css') }}">
<link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
