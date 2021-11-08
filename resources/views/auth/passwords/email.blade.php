@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <div class="uk-width-expand@m uk-flex uk-flex-middle">
        <div class="uk-grid uk-flex-center">
            <div class="uk-width-3-5@m">
                <div class="in-padding-horizontal@s">
                    <!-- logo begin -->
                    <a class="uk-logo" href="{{ route('welcome') }}">
                        <img src="{{ asset('landing/img/in-lazy.gif') }}"
                             data-src="{{ asset('landing/img/in-logo-2.svg') }}" alt="logo" width="160" height="34"
                             data-uk-img>
                    </a>
                    <!-- logo end -->
                    <p class="uk-text-lead uk-margin-top uk-margin-remove-bottom">
                        Let's help you get back in.
                    </p>
                    <p class="uk-text-small uk-margin-remove-top uk-margin-medium-bottom">
                        Remembered password?
                        <a href="{{ route('login') }}">
                            Login here
                        </a>
                    </p>
                    <!-- login form begin -->
                    <form class="uk-grid uk-form" method="post" action="{{ route('password.email') }}">
                        @csrf
                        @error('email')
                        <p style="color: red;" class="uk-text-small uk-margin-remove uk-width-1-1">{{ $message }}</p>
                        @enderror
                        <div class="uk-margin-small uk-width-1-1 uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip fas fa-user fa-sm"></span>
                            <input class="uk-input uk-border-rounded" id="username" value="{{ old('email') }}"
                                   type="email" placeholder="Email" name="email">
                        </div>
                        <div class="uk-margin-small uk-width-1-1">
                            <button class="uk-button uk-width-1-1 uk-button-primary uk-border-rounded uk-float-left"
                                    type="submit" name="submit">
                                Send Password Reset Link
                            </button>
                        </div>
                    </form>
                    <!-- login form end -->
                    {{--<p class="uk-heading-line uk-text-center"><span>Or sign in with</span></p>
                    <div class="uk-margin-medium-bottom uk-text-center">
                        <a class="uk-button uk-button-small uk-border-rounded in-brand-google" href="#"><i class="fab fa-google uk-margin-small-right"></i>Google</a>
                        <a class="uk-button uk-button-small uk-border-rounded in-brand-facebook" href="#"><i class="fab fa-facebook-f uk-margin-small-right"></i>Facebook</a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
