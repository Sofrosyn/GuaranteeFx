<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Signal;
use Illuminate\Support\Facades\DB;

class SignalController
{
    public function index()
    {
        return view('admin.signals.index');
    }

    public function destroy(Signal $signal)
    {
        return DB::transaction(function () use ($signal) {
           $signal->delete();

           $signal->getMedia()->each->delete();

           return redirect()->route('admin.signals.index');
        });
    }
}
