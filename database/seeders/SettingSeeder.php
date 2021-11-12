<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::transaction(function () {
            Setting::query()->truncate();

            Setting::query()->insert([
               ['key' => 'membership_link', 'value' => 'https://t.me'] ,
                ['key' => 'accept_registration', 'value' => true],
                ['key' => 'registration_fee', 'value' => 20]
            ]);
         });
    }
}
