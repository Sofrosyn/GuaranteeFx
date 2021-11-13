<?php

use App\Http\Controllers\Web\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain(config('app.main_domain'))->group(function () {
    Route::get('/', Customer\WelcomeController::class)->name('welcome');
    Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
        Route::get('contact', [Customer\ContactController::class, 'showForm'])->name('contact');
        Route::post('contact', [Customer\ContactController::class, 'submit']);

        Route::get('markets', [Customer\MarketController::class, 'index'])->name('markets');
        Route::get('markets/signals/{signal}/video', [Customer\HomeController::class, 'streamSignalVideo'])
            ->middleware('signed')
            ->name('signals.video');

        Route::view('services', 'landing_pages.services')->name('signals');
        Route::view('account-management', 'landing_pages.account_management')->name('account_management');
        Route::view('copy-trading', 'landing_pages.copy_trading')->name('copy_trading');
        Route::view('about', 'landing_pages.about')->name('about');
        Route::view('indices', 'landing_pages.indices')->name('indices');
        Route::view('synthetics', 'landing_pages.synthetics')->name('synthetics');
        Route::view('stocks', 'landing_pages.stocks')->name('stocks');
        Route::view('gas', 'landing_pages.gas')->name('gas');
        Route::view('cryptocurrency', 'landing_pages.cryptocurrency')->name('cryptocurrency');
        Route::view('currency', 'landing_pages.currency')->name('currency');
    });

    Route::group(['prefix' => 'registration',], function () {
        Route::get('', [Customer\RegistrationController::class, 'showRegistrationForm'])->name('registration');
        Route::post('', [Customer\RegistrationController::class, 'submit']);
    });

    Route::get('make-payment/{registration}', [Customer\Payment\StripeController::class, 'redirectTOCheckout'])
        ->middleware('signed')
        ->name('make_payment');

    Route::any('stripe/callback/{status}', [Customer\Payment\StripeController::class, 'handleCallback'])
        ->where('status', 'success|cancelled')
        ->name('stripe-callback');
    Route::post('stripe/webhook', [Customer\Payment\StripeController::class, 'handleWebhook']);
});

Route::domain(config('app.admin_domain'))->group(function () {
    Auth::routes(['verify' => true, 'register' => false]);
    Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin.'], __DIR__ . '/admin.php');
});
