@extends('layouts.landing')

@section('title', 'Welcome')

@section('content')
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center"
                 style="background-image: url({{ asset('landing/img/in-liquid-slide-bg.png') }});" data-uk-slideshow>
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Learn forex with our courses.</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Weekly educational workshops are a great resource for any skill level trader
                                        </p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">
                                            Discover courses
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('landing/img/in-lazy.gif') }}"
                                         data-src="{{ asset('landing/img/in-liquid-slide-3.svg') }}"
                                         alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Award-winning trading platforms.</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Explore endless trading opportunities with tight spreads and no commission
                                        </p>
                                        <a href="#" class="uk-button uk-button-default uk-border-rounded uk-visible@s">
                                            Discover platform
                                        </a>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ asset('landing/img/in-lazy.gif') }}"
                                         data-src="{{ asset('landing/img/in-liquid-slide-4.svg') }}"
                                         alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous
                   data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next
                   data-uk-slideshow-item="next"></a>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <div class="uk-container">
                        <div class="uk-grid uk-flex uk-flex-center">
                            <div class="uk-width-5-6@m">
                                <div class="uk-grid uk-child-width-1-6@m uk-text-center" data-uk-grid>
                                    <div class="uk-width-1-1">
                                        <p class="uk-text-lead">1700+ market. Countless opportunities.</p>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-5.svg') }}"
                                             alt="sample-icon"
                                             width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            Forex<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-6.svg') }}"
                                             alt="sample-icon"
                                             width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            Indices<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-7.svg') }}"
                                             alt="sample-icon"
                                             width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            Crypto<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-8.svg') }}"
                                             alt="sample-icon"
                                             width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            Shares<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-9.svg') }}"
                                             alt="sample-icon"
                                             width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            Commodities<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                    <div class="slide-icons-1">
                                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-icon-10.svg') }}"
                                             alt="sample-icon" width="48" height="48" data-uk-img>
                                        <a class="uk-button uk-button-text uk-align-center" href="#">
                                            All Markets<i class="fas fa-angle-right uk-margin-small-left"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-6">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-expand@m">
                        <h2>Discover a World of <span class="in-highlight">Opportunities</span>.</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisci eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam quis nostrud amet exercitation ullamco laboris
                            nisi aliquip commodo cupidatat non consequat.
                        </p>
                        <div class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-3@m uk-margin-medium"
                             data-uk-grid>
                            <div>
                                <div class="in-count-wrap">
                                    <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="1700"
                                       data-counter-append="+">0+</p>
                                    <p class="uk-text-muted uk-margin-remove-top">Markets</p>
                                </div>
                            </div>
                            <div>
                                <div class="in-count-wrap">
                                    <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="33">0</p>
                                    <p class="uk-text-muted uk-margin-remove-top">Contries</p>
                                </div>
                            </div>
                            <div>
                                <div class="in-count-wrap">
                                    <p class="uk-text-lead uk-margin-remove-bottom count" data-counter-end="23">0</p>
                                    <p class="uk-text-muted uk-margin-remove-top">Currencies</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-3-5@m uk-inline uk-dark">
                        <img src="{{ asset('landing/img/in-lazy.gif') }}" data-src="img/in-liquid-object-4.svg"
                             alt="sample-image" data-width data-height data-uk-img>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 24%; top: 42%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse two"
                              style="left: 26%; top: 32%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 34%; top: 30%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 48%; top: 27%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 54%; top: 30%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse two"
                              style="left: 70%; top: 47%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse two"
                              style="left: 59%; top: 38%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse two"
                              style="left: 76%; top: 53%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 86%; top: 35%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse two"
                              style="left: 80%; top: 43%"></span>
                        <span class="uk-position-absolute uk-transform-center dot-pulse one"
                              style="left: 89%; top: 72%"></span>
                        <p class="uk-text-small uk-text-muted uk-text-center uk-margin-top">
                            Graphic is for illustration purpose only and should not be relied upon for investment
                            decisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-7 in-offset-top-10">
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m uk-background-contain uk-background-center-center"
                         style="background-image: url({{ asset('landing/img/in-liquid-7-bg.png') }});" data-uk-img>
                        <div class="uk-text-center">
                            <h2 class="uk-margin-remove">Liquid trading platform.</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">
                                Improve your trading results with our industry-leading technology
                            </p>
                        </div>
                        <div
                            class="uk-grid-medium uk-child-width-1-3@s uk-child-width-1-3@m uk-text-center uk-margin-top"
                            data-uk-grid>
                            <div>
                                <img src="{{ asset('landing/img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg"
                                     alt="wave-award"
                                     width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best CFD Broker</h6>
                                <p class="uk-text-small uk-margin-remove-top">TradeON Summit 2020</p>
                            </div>
                            <div>
                                <img src="{{ asset('landing/img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg"
                                     alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Execution Broker</h6>
                                <p class="uk-text-small uk-margin-remove-top">Forex EXPO Dubai 2020</p>
                            </div>
                            <div>
                                <img src="{{ asset('landing/img/in-lazy.gif') }}" data-src="img/in-liquid-award.svg"
                                     alt="wave-award" width="71" height="58" data-uk-img>
                                <h6 class="uk-margin-small-top uk-margin-remove-bottom">Best Trading Platform</h6>
                                <p class="uk-text-small uk-margin-remove-top">London Summit 2020</p>
                            </div>
                        </div>
                        <img class="uk-align-center" src="{{ asset('landing/img/in-liquid-7-mockup.png') }}"
                             data-src="{{ asset('landing/img/in-liquid-7-mockup.png') }}" alt="sample-images"
                             width="691" height="420"
                             data-uk-img>
                        <div
                            class="uk-grid-divider uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center in-offset-top-10"
                            data-uk-grid>
                            <div>
                                <h2 class="uk-margin-small-bottom">~30ms</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">executions speed*</p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">24/5</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">support</p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">0.0</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">spread from 0.0 pips</p>
                            </div>
                            <div>
                                <h2 class="uk-margin-small-bottom">150+</h2>
                                <p class="uk-text-small uk-text-uppercase uk-margin-remove-top">trading instruments</p>
                            </div>
                        </div>
                        <div class="uk-text-center uk-margin-medium-top">
                            <!-- <a class="uk-button uk-button-primary uk-border-rounded uk-margin-small-right" href="#">Create account<i class="fas fa-angle-right uk-margin-small-left"></i></a>
                            <a class="uk-button uk-button-secondary uk-border-rounded" href="#">Discover platform<i class="fas fa-angle-right uk-margin-small-left"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <!-- section content begin -->
        <div class="uk-section in-liquid-15 in-offset-top-20 uk-background-contain uk-background-bottom-center"
             data-src="{{ asset('landing/img/in-liquid-15-bg.png') }}" data-uk-img>
            <div class="uk-container">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-5-6@m">
                        <div class="uk-text-center">
                            <h2 class="uk-margin-remove">Market analysis and trade inspiration.</h2>
                            <p class="uk-text-lead uk-text-muted uk-margin-small-top">
                                Get news, commentary and actionable trade ideas from the expert analysts.
                            </p>
                        </div>
                        <div class="uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-medium-top"
                             data-uk-grid>
                            <div class="uk-width-1-2@s">
                                <div class="uk-inline-clip">
                                    <a href="#">
                                        <img class="uk-border-rounded" src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-15-image-1.jpg') }}"
                                             alt="sample-image" data-width
                                             data-height data-uk-img>
                                        <div class="uk-position-bottom uk-overlay uk-overlay-primary">
                                            <h4 class="uk-margin-remove">News and inspiration</h4>
                                            <p class="uk-margin-remove uk-text-muted">Economic news and prospect</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="uk-width-1-2@s">
                                <div class="uk-inline-clip">
                                    <a href="#">
                                        <img class="uk-border-rounded" src="{{ asset('landing/img/in-lazy.gif') }}"
                                             data-src="{{ asset('landing/img/in-liquid-15-image-2.jpg') }}"
                                             alt="sample-image" data-width
                                             data-height data-uk-img>
                                        <div class="uk-position-bottom uk-overlay uk-overlay-primary">
                                            <h4 class="uk-margin-remove">Insight from experts</h4>
                                            <p class="uk-margin-remove uk-text-muted">Plan and trading strategy</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small green">EQ</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Stocks</h6>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small red">CFD</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">CFDs</h6>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small blue">FX</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Forex</h6>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <div>
                                <div class="uk-card uk-card-secondary uk-card-body uk-border-rounded">
                                    <div class="uk-flex uk-flex-middle">
                                        <div class="uk-margin-small-right">
                                            <i class="in-icon-wrap circle small grey">BO</i>
                                        </div>
                                        <div>
                                            <h6 class="uk-margin-remove">Bonds</h6>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->

    </main>
@endsection
