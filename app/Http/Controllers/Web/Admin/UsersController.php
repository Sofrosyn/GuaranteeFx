<?php

namespace App\Http\Controllers\Web\Admin;

class UsersController
{
    public function index()
    {
        return view('admin.users.index');
    }
}
