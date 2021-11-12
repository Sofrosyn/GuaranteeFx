<!DOCTYPE html>
<html lang="zxx" dir="ltr">
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
<header>
    <!-- header content begin -->
    <div class="{{ $surround_header ?? 'uk-section uk-padding-remove-vertical' }}">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <!-- logo begin -->
                    <a class="uk-logo" href="{{ route('welcome') }}">
                        <img src="{{ asset('landing/img/in-lazy.gif') }}" data-src="{{ asset('landing/img/logo.png') }}"
                             alt="logo" width="120" height="120" data-uk-img>
                    </a>
                    <!-- logo end -->

                    <div class="uk-navbar-item uk-position-center" >

                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="{{ route('welcome') }}">Home</a></li>

                            <li><a href="{{ route('pages.markets') }}">Markets</a></li>

                            <li><a href="{{ route('pages.about') }}">About</a></li>
                            <li><a href="{{ route('pages.signals') }}">Services</a></li>
                            <li><a href="{{ route('pages.contact') }}">Contact</a></li>


                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        @if(settings('accept_registration'))
                            <a href="{{ route('consultation') }}" class="uk-button uk-button-primary uk-border-rounded "
                               style="color: white;">Consultation</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>
@yield('breadcrumb')
@yield('content')
<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2@m" data-uk-grid>
                <div class="in-footer-logo">
                </div>
                <div class="uk-flex uk-flex-right@m">
                    <div class="in-footer-socials">
                        <a href="#"><i class="fab fa-facebook-square"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-telegram-plane"></i></a>
                    </div>

                </div>
            </div>
            <div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-large-top" data-uk-grid>
                <div>
                    <h5>Assets</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('pages.cryptocurrency') }}">Cryptocurrency</a></li>
                        <li><a href="{{ route('pages.currency') }}">Currency</a></li>
                        <li><a href="{{ route('pages.indices') }}">Indices</a></li>
                        <li><a href="{{ route('pages.stocks') }}">Stocks</a></li>
                        <li><a href="{{ route('pages.gas') }}">Commodities</a></li>
                        <li><a href="{{ route('pages.synthetics') }}">Synthetic</a></li>

                    </ul>
                </div>
                <div>
                    <h5>Site map</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="{{ route('welcome') }}">Home</a></li>
                        <li><a href="{{ route('pages.markets') }}">Market</a></li>
                        <li><a href="{{ route('pages.about') }}">About</a></li>
                        <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Legal</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="https://docs.google.com/document/d/1LDKK3i2OISUqGK_gt_Hou_RLyFMdUGLqkmc4I0xnDVE/edit?usp=sharing">Terms of Service</a></li>
                        <li><a href="https://docs.google.com/document/d/1LDKK3i2OISUqGK_gt_Hou_RLyFMdUGLqkmc4I0xnDVE/edit?usp=sharing">Security</a></li>
                        <li><a href="https://docs.google.com/document/d/1LDKK3i2OISUqGK_gt_Hou_RLyFMdUGLqkmc4I0xnDVE/edit?usp=sharing">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright ©2021 GuarantyFX. All Rights Reserved.</span></p>
                    <p class="in-trading-risk">
                        Trading derivatives and leveraged products carries a high level of risk, including the risk of
                        losing substantially more than your initial investment. It is not suitable for everyone. Before
                        you make any decision in relation to a financial product you should obtain and consider our
                        Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website
                        and seek independent advice if necessary
                    </p>
                </div>
            </div>
        </div>
        <!-- footer content end -->
        <!-- totop begin -->
        <div class="uk-visible@m">
            <a href="#" class="in-totop fas fa-chevron-up" data-uk-scroll></a>
        </div>
        <!-- totop end -->
</footer>
<!-- Javascript -->
@include('sweetalert::alert')
<script src="{{ asset('landing/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('landing/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('landing/js/config-theme.js') }}"></script>
@stack('js')
</body>

</html>
