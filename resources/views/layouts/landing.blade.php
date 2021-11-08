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
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container" data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <div class="uk-navbar-item uk-position-center" >
                        <!-- logo begin -->
                        <a class="uk-logo" href="index.html">
                            <img src="img/in-lazy.gif" data-src="img/in-logo-1.svg" alt="logo" width="160" height="34" data-uk-img>
                        </a>
                        <!-- logo end -->
                        <!-- navigation begin -->
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li><a href="index.html">Home</a></li>

                            <li><a href="markets.html">Markets</a></li>

                            <li><a href="about.html">About</a></li>
                            <li><a href="blog-list.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>


                        </ul>
                        <!-- navigation end -->
                    </div>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('login') }}" class="uk-button uk-button-primary uk-border-rounded "
                           style="color: white;">Consultation</a>

                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- header content end -->
</header>
@yield('content')
<footer>
    <!-- footer content begin -->
    <div class="uk-section uk-section-secondary in-footer-feature uk-margin-medium-top">
        <div class="uk-container">
            <div class="uk-grid uk-flex uk-flex-center">
                <div class="uk-width-5-6@m">
                    <div class="uk-grid uk-child-width-1-3@s" data-uk-grid>
                        <div class="uk-flex uk-flex-middle">
                            <div class="uk-margin-right">
                                <i class="fas fa-history in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">25 years of Excellence</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-center@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-trophy in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">15+ Global Awards</h6>
                            </div>
                        </div>
                        <div class="uk-flex uk-flex-middle uk-flex-right@m">
                            <div class="uk-margin-right">
                                <i class="fas fa-phone-alt in-icon-wrap"></i>
                            </div>
                            <div>
                                <h6 class="uk-margin-remove">24/5 Customer Support</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-section uk-background-secondary uk-light">
        <div class="uk-container uk-text-small">
            <div class="uk-child-width-1-2@m" data-uk-grid>
                <div class="in-footer-logo">
                    <img src="img/in-lazy.gif" data-src="img/in-logo-1.svg" alt="logo" width="127" height="27" data-uk-img>
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
                    <h5>Markets</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Share CFDs</a></li>
                        <li><a href="#">Forex</a></li>
                        <li><a href="#">Indices</a></li>
                        <li><a href="#">Commodities</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Trading Platforms</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Web platform</a></li>
                        <li><a href="#">Trading apps</a></li>
                        <li><a href="#">MetaTrader 5</a></li>
                        <li><a href="#">Compare features</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Account Types</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">Demo account</a></li>
                        <li><a href="#">Standart account</a></li>
                        <li><a href="#">ECN account</a></li>
                        <li><a href="#">Islamic acount</a></li>
                    </ul>
                </div>
                <div>
                    <h5>Learn to Trade</h5>
                    <ul class="uk-list uk-link-text">
                        <li><a href="#">News and trade ideas</a></li>
                        <li><a href="#">Trading strategy</a></li>
                        <li><a href="#">Forex trading course</a></li>
                    </ul>
                </div>
            </div>
            <div class="uk-grid uk-margin-large-top">
                <div class="uk-width-1-1">
                    <p class="uk-heading-line uk-margin-large-bottom"><span>Copyright ©2021 Liquid Inc. All Rights Reserved.</span></p>
                    <p class="in-trading-risk">Trading derivatives and leveraged products carries a high level of risk, including the risk of losing substantially more than your initial investment. It is not suitable for everyone. Before you make any decision in relation to a financial product you should obtain and consider our Product Disclosure Statement (PDS) and Financial Services Guide (FSG) available on our website and seek independent advice if necessary</p>
                </div>
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
<script src="{{ asset('landing/js/vendors/uikit.min.js') }}"></script>
<script src="{{ asset('landing/js/vendors/blockit.min.js') }}"></script>
<script src="{{ asset('landing/js/config-theme.js') }}"></script>
</body>

</html>
