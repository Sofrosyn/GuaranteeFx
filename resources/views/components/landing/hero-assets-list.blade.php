<div class="uk-container">
    <div class="uk-grid uk-flex uk-flex-center">
        <div class="uk-width-5-6@m">
            <div class="uk-grid uk-child-width-1-6@m uk-text-center" data-uk-grid>
                {{ $header ?? null }}
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/forex_in-liquid-icon-5.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('pages.currency') }}">
                        Currencies<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/indices_in-liquid-icon-6.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('enlighten.run.index') }}">
                        Indices<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/crypto_in-liquid-icon-7.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('pages.cryptocurrency') }}">
                        Crypto<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/stock_in-liquid-icon-9.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('pages.stocks') }}">
                        Stocks<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/synthetic_in-liquid-icon-10.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('pages.synthetics') }}">
                        Synthetic<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
                <div class="slide-icons-1">
                    <img src="{{ $preloader_img }}" data-src="{{ asset('landing/img/gas_in-liquid-icon-8.svg') }}"
                         alt="sample-icon" width="48" height="48" data-uk-img>
                    <a class="uk-button uk-button-text uk-align-center" href="{{ route('pages.gas') }}">
                        Gas<i class="fas fa-angle-right uk-margin-small-left"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
