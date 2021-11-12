@extends('layouts.landing.pages')
@section('title', 'Cryptocurrency')

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
                                        <h1>Cryptocurrency</h1>
                                        <p class="uk-text-lead uk-visible@m">
                                            Trade Bitcoin, Ethereum, Litecoin and Ripple CFDs with experts.
                                            .</p>
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
                                <h3>CRYPTOCURRENCY</h3>


                                <p style ="text-align: justify;" >A cryptocurrency is a digital currency. Some of the most famous cryptocurrencies (cryptos) include Bitcoin, Ethereum, Litecoin and Ripple. And as of September 2020, there are a total of over 6,955 different cryptos in existence.*

                                    Like any currency, they can be used to buy and sell goods. You can use Bitcoin to purchase goods and services at household names such as Microsoft, Starbucks and Wikipedia.
                                    Key facts to know
                                    They are decentralised.
                                    Cryptocurrencies are not controlled by any government or central bank, and so are not subject to direct government or central bank intervention. Instead, they use a global network of encrypted peer-to-peer transactions, which is typically based on blockchain technology (cryptos take their name from their encrypted nature).
                                    They are practically immune to fraud
                                    The transparent and distributed structure of blockchain technology makes it very hard to manipulate.

                                    A blockchain is essentially a public digital ledger that records transactions. Transactions are made up of blocks and after a certain number of transactions, a new block is permanently added to the chain.

                                    As the ledger is open to everyone on the network and no one entity has control, any hacking attempts are made nearly impossible.


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
                                <td>BTCUSD</td>
                                <!-- <td>10%</td> -->
                            </tr>
                            <tr>
                                <td>ETHUSD</td>
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
