@extends('layouts.landing.pages')
@section('title', 'Currency')

@section('content')
    <main>
        <!-- section content begin -->
        <div class="uk-section uk-padding-remove-vertical">
            <div class="uk-light in-slideshow uk-background-cover uk-background-top-center" style="background-image: url(img/in-liquid-slide-bg.png);" data-uk-slideshow>
                <ul class="uk-slideshow-items">

                    <li>
                        <div class="uk-container">
                            <div class="uk-grid-medium" data-uk-grid>
                                <div class="uk-width-1-2@s">
                                    <div class="uk-overlay">
                                        <h1>Currency</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            With over $6 trillion transacted every day, forex is the world's most traded market
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
                                <h3>CURRENCY</h3>
                                <p style="text-align: justify;">

                                    There are always new possibilities.
                                    Forex is a highly liquid and turbulent market that is constantly reacting. This makes it particularly appealing to day traders.
                                    There’s no exchange
                                    Unlike shares which use exchanges such as the New York Stock Exchange or London Stock Exchange, forex is traded by a global network of banks.
                                    They are sold in pairs.
                                    You're always comparing one currency to another, such as the British pound to the US dollar (GBP/USD).
                                    There are Several reasons to trade forex.
                                    For short-term prospects, this is ideal.
                                    Because the forex market is so large and volatile, new opportunities are constantly emerging.<br/>

                                    If you want to invest in the Forex market but don't have the time to learn how to trade, GuarantyFX
                                    forex managed accounts are for you.GuarantyFX Forex managed accounts allow you to invest in the currency market while
                                    having professional traders handle your account.



                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-3@m">
                        <h3>Currency pairs we offer</h3>
                        <table class="uk-table uk-table-divider uk-table-striped uk-text-small uk-text-center">
                            <thead>
                            <tr>
                                <th class="uk-text-center">Pairs</th>
                                <!-- <th class="uk-text-center">Initial Deposit</th> -->
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>EURUSD</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>EURAUD</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>AUDUSD</td>
                                <!-- <td>10%</td> -->
                            </tr>

                            <tr>
                                <td>EURCAD</td>
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
                                    <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('registration') }}">Register</a>
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
