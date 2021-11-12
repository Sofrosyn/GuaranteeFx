@extends('layouts.landing.pages')
@section('title', 'Synthetics')

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
                                        <h1>Synthetic</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Synthetic assets are blockchain-based cryptocurrency derivatives that act
                                            and feel like traditional derivatives, but are far from normal.
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
\                </div>
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
                                <h3>SYTHETIC</h3>
                                <p style="text-align: justify;" >
                                    To understand synthetic assets, the first thing to know is that they're derivatives.
                                    A derivative is any asset that derives its value from an underlying asset or index.
                                    Suppose a derivative's value is tied to the value of another asset via a contract.
                                    In that case, we can trade the movement of that value using trading products like futures and perpetuals.
                                    <br/> <br/>
                                    Instead of using contracts to create the chain between an underlying asset, the derivative product, synthetic assets tokenize the relationship.
                                    This means that synthetic assets can impart exposure to any asset in the world — all from within the crypto ecosystem.

                                    Synthetic assets enable far more liquidity across global exchanges, swap protocols,
                                    and wallets than traditional derivatives are even remotely capable of.
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
                                <td>step-index</td>
                                <!-- <td>10%</td> -->
                            </tr>

                            <tr>
                                <td>boom1000</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>crash1000</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>volatility 75</td>
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
                                    <h3>Get up to 50% ROI per investment on all Assets &amp; forex trades</h3>
                                </div>
                                <div class="uk-width-auto">
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('register') }}">Register</a>
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
