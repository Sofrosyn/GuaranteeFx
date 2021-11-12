@extends('layouts.landing.pages')
@section('title', 'Account Management')

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
                                        <h1>Account Management</h1>
                                        <p class="uk-text-lead uk-visible@m">Get exposure to global markets while leveraging the success of our professional traders.</p>
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
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
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
                                <h3>ACCOUNT MANAGEMENT</h3>
                                <p style="text-align: justify;">

                                    A forex-managed account type is one that is managed by another trader, a professional trader,
                                    also known as a fund manager.

                                    This person manages the account and trades with the account on behalf of other clients, and
                                    there is typically commission paid by clients to these fund managers to take care of the running
                                    of these types of accounts which could be separate from any fees charged by the forex brokers, who
                                    typically host these accounts.

                                    This person is managing the account and trades in that account on behalf of other clients,
                                    and there is typically commission paid by clients to these fund managers to take care of the
                                    running of these types of accounts which could be separate from any fees charged by the forex brokers,
                                    who typically host these accounts.

                                <h4>Who should consider using our services?</h4>

                                <h6>Too busy to watch the market</h6>
                                Many people simply don’t have the time, experience, or disposition to trade in the forex
                                market. Paying attention is a full-time commitment, but career or family obligations can
                                distract and divert your attention. A managed forex account gives you the freedom to pursue
                                other activities that you otherwise might not be able to.

                                <h6>Prefer to let someone else do the trading</h6>
                                If you have ever traded in the forex market, you have an idea of the directional
                                uncertainty most traders suffer and the notable volatility currency pairs can exhibit.
                                Know your limitations if you have a problem taking losses and opt to employ a trading
                                professional instead.

                                <h6>Don’t have the psychological make-up of a trader</h6>
                                Some people lack the psychological personality types best suited for trading. For example,
                                if you can never admit when you’re wrong, holding onto a losing position could wipe out your
                                entire trading account. Another example would be a predisposition to overtrading because you
                                find trading exciting. However, trading excess can also take its toll financially, physically,
                                and mentally. Rather than risk trading yourself, you may want to find a good account manager.

                                <h6>Want to plan for the future</h6>
                                Our asset managers will always study and adapt to the markets and it has no extra cost for you.
                                Our list of forex trading services offers one of the best great selection of asset managers groups. Our goal is that our clients can access their long-term, steady profitable strategies and diversify in one of the best selections of conservative and profitable strategies of the whole Forex market.


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
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('consultation') }}">Register</a>
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
