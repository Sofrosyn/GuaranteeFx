@extends('layouts.landing.pages')
@section('title', 'Marketing')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10"
                     data-uk-grid>
                    <div class="uk-width-1-1">
                        <h2 class="uk-margin-remove">The <span class="in-highlight">Assets</span> we trade</h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">The portfolio of your dreams</p>
                        <p>
                            At GuarantyFX we create wealth for our clients by providing highly trusted financial and
                            investment solutions. Always building consistent and sustainable investment services by
                            providing optimum profitability, security of funds, and superb customer support.
                        </p>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/gas_in-liquid-icon-8.svg') }}"
                                 alt="sample-icon" width="48" height="48" data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.gas') }}">
                                    Commodities<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Hedge Commodities like oil and gas against inflation.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">

                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/crypto_in-liquid-icon-7.svg') }}"
                                 alt="sample-icon" width="48" height="48"
                                 data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.cryptocurrency') }}">
                                    Cryptocurrency<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Trade Bitcoin, Ethereum, Litecoin and Ripple CFDs with experts.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/forex_in-liquid-icon-5.svg') }}"
                                 alt="sample-icon" width="48" height="48"
                                 data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.currency') }}">
                                    Currency<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Trade Currencies with our team of brilliant brokers.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-navy">

                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/stock_in-liquid-icon-9.svg') }}"
                                 alt="sample-icon" width="48" height="48"
                                 data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.stocks') }}">Stocks<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>Profit from a company’s performance of your choice.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-grey">
                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/indices_in-liquid-icon-6.svg') }}"
                                 alt="sample-icon" width="48" height="48"
                                 data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.indices') }}">
                                    Indices<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Get exposure to global markets with our professional traders.</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-orange">
                            <img class="uk-margin-bottom" src="{{ $preloader_img }}"
                                 data-src="{{ asset('landing/img/synthetic_in-liquid-icon-10.svg') }}" alt="sample-icon" width="48" height="48"
                                 data-uk-img>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.synthetics') }}">
                                    Synthetic<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Trade blockchain-based cryptocurrency derivatives</p>
                        </div>
                    </div>
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
                                <h3>Why Invest with GuarantyFX?</h3>
                                <p>Forex managed accounts allow you to invest in Forex under the supervision of a
                                    professional trader.
                                    Because it moves so quickly and is more liquid than other markets, the Forex market
                                    is the most active in the world. Because of this, transaction costs are cheaper, and
                                    it is gaining popularity among investors.

                                    With our company's Forex trading services, you have the finest, safest, and easiest
                                    way to obtain profits into your account.
                                    We'll take care of the trading from the start, in the most convenient way possible;
                                    all you have to do now is keep an eye on your account balance.
                                </p>

                            </div>
                        </div>
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
                                    <h3>Get up to 50% ROI per investment on all Assets &amp; forex trades</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded"
                                       href="{{ route('register') }}">Register</a>
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
