<?php

use App\Http\Controllers\Web\Employer\DashboardController;
use App\Http\Controllers\Web\Employer\GetStartedController;
use App\Http\Controllers\Web\Employer\JobController;
use Illuminate\Support\Facades\Route;

Route::get('', DashboardController::class)->name('dashboard');

Route::get('get-started', GetStartedController::class)->name('get-started');

Route::resource('jobs', JobController::class);
