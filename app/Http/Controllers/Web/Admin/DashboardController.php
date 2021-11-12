<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Registration;
use App\Models\Signal;

class DashboardController
{
    public function __invoke()
    {
        return view('admin.dashboard', [
            'users' => Registration::query()->count(),
            'signals' => Signal::query()->count()
        ]);
    }
}
