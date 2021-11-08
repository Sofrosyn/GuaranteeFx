<?php

namespace App\Http\Controllers\Web\Customer;

class WelcomeController
{
    public function __invoke()
    {
        return view('welcome');
    }
}
