<?php

namespace App\Http\Controllers\Web\Customer;

use App\Mail\Admin\ContactMessageMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController
{
    public  function showForm()
    {
        return view('landing_pages.contact');
    }

    public function submit(Request $request)
    {
        $inputs = $request->validate([
            'full_name' => ['required', 'first_and_last_name', 'max:100'],
            'email' => ['required', 'email:dns' ,'max:150'],
            'subject' => ['required', 'min:4', 'max:150'],
            'message' => ['required', 'min:10', 'max:250'],
        ]);

        Mail::to(User::query()->where('is_admin', true)->pluck('email'))
            ->send(new ContactMessageMail($inputs));

        alert()->success('Success', 'Your message has been successfully sent. We will respond as soon as possible.');

        return redirect()->route('welcome');
    }
}
