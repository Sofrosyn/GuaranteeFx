@extends('layouts.landing.pages')
@section('title', 'Gas')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center"
                 style="background-image: url({{ asset('landing/img/in-liquid-slide-bg.png') }});" data-uk-slideshow>
                <ul class="uk-slideshow-items">

                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Commodities</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Commodities like oil and gas offer traders the opportunity to speculate in
                                            new markets and to hedge against inflation.
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ $preloader_img }}"
                                         data-src="{{ asset('landing/img/in-liquid-slide-2.svg') }}" alt="image-slide"
                                         width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                   data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                   data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                <div class="uk-section uk-padding-remove-vertical in-slideshow-features uk-visible@m">
                    <x-landing.hero-assets-list />
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <i class="fas fa-money-bill-wave fa-2x in-icon-wrap circle large primary-color uk-margin-right"></i>
                            </div>
                            <div class="uk-width-expand">
                                <h3>COMMODITIES</h3>
                                <p style="text-align: justify;">

                                    Commodities are the basic raw materials used by people and industries.
                                    People and industry use commodities as basic raw materials.
                                    Minerals like metals and oil, as well as foods like oil, sugar, wheat, and meat, and energy stocks, are among them.
                                    <br/> <br/>
                                    Commodities have been traded for thousands of years, and they may have been one of the first large-scale exchanges of materials. Commodity trade is still important in today's global economy.
                                    Because prices are driven by supply and demand factors that are visible in the real world, commodity markets might be easier to grasp than other financial markets.

                                    Commodity trading often takes place within specialised commodity exchanges, and the oldest dates back to Amsterdam in 1530.
                                    These exchanges were once physical marketplaces where traders gathered, but these days the definition is broader.
                                    <br/> <br/>

                                    A commodities exchange is now more likely to be a legal entity that has been formed to provide trading facilities and enforce
                                    rules for the trading of standardised commodity contracts and investment products based on commodity trading.
                                    You can now trade commodities online in a number of different ways – one of which is CFDs (contracts for difference.)



                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <h3>Pairs we offer</h3>
                        <table class="uk-table uk-table-divider uk-table-striped uk-text-small uk-text-center">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Pairs</th>
                                <!-- <th class="uk-text-center">Initial Deposit</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>UKOIL</td>
                                <!-- <td>10%</td> -->
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-1-1 in-card-16">
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded">
                            <div class="uk-grid uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <h3>Get up to 100% ROI per investment on all Assets &amp; forex trades</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="signin.html">Register</a>
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
