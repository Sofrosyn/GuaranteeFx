@extends('layouts.landing.pages')
@section('title', 'Services')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid-match uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m in-card-10" data-uk-grid>
                    <div class="uk-width-1-1">
                        <h2 class="uk-margin-remove">A <span class="in-highlight">relationship</span> on your terms.</h2>
                        <p class="uk-text-lead uk-text-muted uk-margin-remove">Work with us the way you want.</p>
                        <p>
                            At GuarantyFX we create wealth for our clients by providing highly trusted financial and
                            investment solutions. Always building consistent and sustainable investment services by
                            providing optimum profitability, security of funds, and superb customer support.
                        </p>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-green">
                            <i class="fas fa-seedling fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="#">Investment<i class="fas fa-chevron-right uk-float-right"></i></a>
                            </h4>
                            <hr>
                            <p>A wide selection of investment product to help build diversified portfolio</p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                            <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.copy_trading') }}">
                                    Copy Trading<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Each trading account is maintained independently and by hand.
                            </p>
                        </div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                            <i class="fas fa-chart-pie fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                            <h4 class="uk-margin-top">
                                <a href="{{ route('pages.account_management') }}">
                                    Account Management<i class="fas fa-chevron-right uk-float-right"></i>
                                </a>
                            </h4>
                            <hr>
                            <p>Dedicated financial consultant to help reach your own specific goals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <!-- <div class="uk-section">
            <div class="uk-container">
                <div class="uk-grid">
                    <div class="uk-width-2-3@m">
                        <div class="uk-grid uk-grid-small" data-uk-grid>
                            <div class="uk-width-auto@m">
                                <i class="fas fa-money-bill-wave fa-2x in-icon-wrap circle large primary-color uk-margin-right"></i>
                            </div>
                            <div class="uk-width-expand">
                                <h3>Why Invest with GuaranteeFX?</h3>
                                <p>Forex managed accounts allow you to invest in Forex under the supervision of a professional trader.
                                    Because it moves so quickly and is more liquid than other markets, the Forex market is the most active in the world. Because of this, transaction costs are cheaper, and it is gaining popularity among investors.

                                    With our company's Forex trading services, you have the finest, safest, and easiest way to obtain profits into your account.
                                    We'll take care of the trading from the start, in the most convenient way possible; all you have to do now is keep an eye on your account balance.
                                    </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
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
                                       href="{{ route('registration') }}">Register</a>
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
