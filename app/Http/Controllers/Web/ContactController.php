<?php

namespace App\Http\Controllers\Web;

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
