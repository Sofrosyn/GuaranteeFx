<?php

use App\Http\Controllers\Web\Admin;
use App\Http\Livewire\Admin\Signals\ManageSignal;
use Illuminate\Support\Facades\Route;

Route::get('', Admin\DashboardController::class)->name('dashboard');
Route::get('users', [Admin\UsersController::class, 'index'])->name('users.index');

Route::get('signals/create', ManageSignal::class)->name('signals.create');
Route::resource('signals', Admin\SignalController::class)->only(['index', 'destroy']);

Route::get('settings', [Admin\SettingController::class, 'index'])->name('settings');
Route::post('settings', [Admin\SettingController::class, 'update']);
