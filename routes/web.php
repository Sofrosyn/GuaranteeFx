<?php

use App\Http\Controllers\Web\Admin;
use App\Http\Controllers\Web\Customer\ContactController;
use App\Http\Controllers\Web\Customer\WelcomeController;
use App\Http\Livewire\Admin\Signals\ManageSignal;
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

Route::get('/', WelcomeController::class)->name('welcome');
Route::group(['prefix' => 'pages', 'as' => 'pages.'], function () {
    Route::get('contact', [ContactController::class, 'showForm'])->name('contact');
    Route::post('contact', [ContactController::class, 'submit']);

    Route::view('services', 'landing_pages.services')->name('signals');
    Route::view('account-management', 'landing_pages.account_management')->name('account_management');
    Route::view('copy-trading', 'landing_pages.copy_trading')->name('copy_trading');
    Route::view('about', 'landing_pages.about')->name('about');
    Route::view('markets', 'landing_pages.markets')->name('markets');
    Route::view('indices', 'landing_pages.indices')->name('indices');
    Route::view('synthetics', 'landing_pages.synthetics')->name('synthetics');
    Route::view('stocks', 'landing_pages.stocks')->name('stocks');
    Route::view('gas', 'landing_pages.gas')->name('gas');
    Route::view('cryptocurrency', 'landing_pages.cryptocurrency')->name('cryptocurrency');
    Route::view('currency', 'landing_pages.currency')->name('currency');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'redirect_admins'], 'prefix' => 'home',], function () {
    Route::get('', fn() => "Hello")->name('home');
});

Route::group(['middleware' => ['auth', 'admin'], 'as' => 'admin.', 'prefix' => 'admin'], function () {
    Route::get('', Admin\DashboardController::class)->name('dashboard');
    Route::get('users', [Admin\UsersController::class, 'index'])->name('users.index');

    Route::get('signals/create', ManageSignal::class)->name('signals.create');
    Route::resource('signals', Admin\SignalController::class)->only(['index', 'destroy']);
});
