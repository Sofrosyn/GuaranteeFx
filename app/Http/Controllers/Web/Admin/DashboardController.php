<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\User;

class DashboardController
{
    public function __invoke()
    {
        return view('admin.dashboard', [
            'users' => User::query()->count(),
        ]);
    }
}
