<?php

namespace App\Providers;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('email_dns', function ($attribute, $value) {
            if ($this->app->runningUnitTests()) {
                return true;
            }

            $validator = new EmailValidator();
            $multipleValidations = new MultipleValidationWithAnd([
                new DNSCheckValidation()
            ]);

            return $validator->isValid($value, $multipleValidations);
        });

        Validator::extend('first_and_last_name', function ($attribute, $value) {
            return preg_match('/^\w+\s\w++(\s\w+)?$/i', $value);
        });
    }
}
