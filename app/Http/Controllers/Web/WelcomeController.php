<?php

namespace App\Http\Controllers\Web;

class WelcomeController
{
    public function __invoke()
    {
        return view('welcome');
    }
}
