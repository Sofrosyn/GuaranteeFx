<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = json_decode(file_get_contents(base_path('data/countries.json')), true);

        Schema::disableForeignKeyConstraints();

        Country::query()->truncate();

        Country::query()->insert(array_map(function ($country) {
            return ['short_code' => $country['code'], 'name' => $country['name'], 'phone_code' => $country['dial_code']];
        }, $countries));

        Schema::enableForeignKeyConstraints();
    }
}
