<?php

namespace App\Http\Controllers\Web\Customer;

use Illuminate\Http\Request;

class ContactController
{
    public  function showForm()
    {
        return view('landing_pages.contact');
    }

    public function submit(Request $request)
    {
        return $request->post();
    }
}
