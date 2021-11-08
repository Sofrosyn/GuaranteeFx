<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('layouts.landing.meta_tags')
</head>

<body>
<!-- preloader begin -->
<div class="in-loader">
    <div></div>
    <div></div>
    <div></div>
</div>
<!-- preloader end -->
<main>
    <!-- section content begin -->
    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-container uk-container-expand">
            <div class="uk-grid" data-uk-height-viewport="expand: true">
                <div
                    class="uk-width-3-5@m uk-background-cover uk-background-center-right uk-visible@m uk-box-shadow-xlarge"
                    style="background-image: url({{ asset('landing/img/in-signin-image.jpg') }});"></div>
                    @yield('content')
            </div>
        </div>
    </div>
    <!-- section content end -->
</main>
<!-- Javascript -->
<script src="{{ asset('landing/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('landing/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('landing/js/config-theme.js') }}"></script>
</body>

</html>
