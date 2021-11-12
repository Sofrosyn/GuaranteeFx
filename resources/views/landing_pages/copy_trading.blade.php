@extends('layouts.landing.pages')
@section('title', 'Copy Trading')

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
                                        <h1>Copy Trading</h1>
                                        <p class="uk-text-lead uk-visible@m"
                                        >Automate your trading by following other professional traders' trades
                                        </p>
                                    </div>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <img class="in-slide-img" src="{{ $preloader_img }}"
                                         data-src="{{ asset('landing/img/in-liquid-slide-2.svg') }}"
                                         alt="image-slide" width="500" height="400" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="uk-position-center-left uk-position-small uk-hidden-hover"
                   href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover"
                   href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
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
                                <h3>COPY TRADING</h3>
                                <p style="text-align: justify;">

                                    This is a method of automating your trading by following other traders' trades.
                                    It's frequently utilized by newbies who don’t know how to trade, and it has the extra
                                    benefit of teaching them along the road. Because all trades are automated, more experienced
                                    traders may be able to take a break from their screens if they need to.

                                    <br/><br/>
                                    The purpose of copy trading, like conventional trading, is to open positions on a variety of
                                    financial markets, such as FX, CFDs on stocks, commodities, indices, and cryptocurrencies, and
                                    then close the position after the asset's value has increased. However, just like trading for
                                    yourself, you might lose money here as well.

                                    <br/><br/>
                                    This could be a good option for those who lack the time or experience to invest by themselves.
                                    For this reason, many brokers offer the facility of copy trading. There are a variety of platforms
                                    offering copy trading services, and while some are manual, others are fully automated. This enables
                                    you to sit back and watch the action.

                                    <br/><br/>
                                    GuarantyFX for its copy trade, it employs high-quality sources. Hedge funds, experienced brokers, and
                                    money managers are among these parties. This implies that using GuarantyFx’s copy or mirror trading gives
                                    you valuable access to experienced traders, allowing you to mimic their trades and benefit from their knowledge.

                                    <br/><br/>
                                    Using this trading method to your advantage might be extremely profitable. In reality, many new and seasoned social
                                    traders have had the opportunity to obtain direct access to the platform's top traders, resulting in a considerable
                                    rise in trading success.


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
                                       href="{{ route('consultation') }}">Register</a>
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
