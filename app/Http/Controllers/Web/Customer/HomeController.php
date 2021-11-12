<?php

namespace App\Http\Controllers\Web\Customer;

use App\Models\Signal;

class HomeController
{
    public function showDashboard()
    {
        return view('customer.home', [
            'user' => auth()->user(),
        ]);
    }

    public function showSignals()
    {
        return view('customer.signals');
    }

    public function streamSignalVideo(Signal $signal)
    {
        $video = $signal->getFirstMedia();

        return response()->file($video->getPath());
    }
}
