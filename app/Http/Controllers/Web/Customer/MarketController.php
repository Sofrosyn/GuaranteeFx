<?php

namespace App\Http\Controllers\Web\Customer;

use App\Models\Signal;

class MarketController
{
    public function index()
    {
        return view('landing_pages.markets', [
           'signals' => Signal::query()->latest()->get(),
        ]);
    }
}
