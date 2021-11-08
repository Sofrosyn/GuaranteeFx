@extends('layouts.landing.pages')
@section('title', 'Indices')

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
                                        <h1>Indices</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Get exposure to global markets while leveraging the success of our professional traders.
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
                                <h3>INDICES</h3>
                                <p style="text-align: justify;">Indices are used to track the progress of a group of stocks.
                                    Indices, rather than focusing solely on the growth or performance of a single firm, allow you to assess the
                                    overall health and strength of a market. Stock indices, share indices, and the stock market are all terms that
                                    have been used to describe them.

                                    Different indices track various stock groups.
                                    The FTSE 100 index analyzes the performance of the London Stock Exchange in the United Kingdom,
                                    and includes firms such as Shell, BP, HSBC, Vodafone, and BT. Other indices may have a broader focus,
                                    such as the entire region or continent, but others may simply look at a single industry.

                                    Here are a few of the most well-known indices:

                                    S&P 500 (US SP 500): the most widely used measure of the US stock market, the Standard and Poor's
                                    (S&P) tracks the prices of the largest 500 companies listed on the New York Stock Exchange and the
                                    NASDAQ. Wall Street (reflects Dow Jones): The 30 'blue-chip' companies on the New York Stock Exchange,
                                    including Apple, Intel, Exxon Mobil, and Goldman Sachs.
                                    It contains all businesses listed on the Dow, as well as 470 others. FTSE 100 (UK 100):


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
                                <td>USTECH100</td>
                                <!-- <td>10%</td> -->
                            </tr>

                            <tr>
                                <td>DJ50</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>GER30</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>US2000</td>
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
