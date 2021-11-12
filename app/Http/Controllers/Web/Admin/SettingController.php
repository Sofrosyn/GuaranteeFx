<?php

namespace App\Http\Controllers\Web\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'accept_registration' => ['nullable'],
            'registration_fee' => ['required', 'integer', 'min:1'],
            'membership_link' => ['required', 'url', 'max:255'],
        ]);

        $data['accept_registration'] = (bool)($data['accept_registration'] ?? null);

        foreach ($data as $item => $update) {
            Setting::query()->where('key', $item)->update(['value' => $update]);
        }

        alert()->success('Settings has been updated');
        return redirect()->route('admin.settings');
    }
}
