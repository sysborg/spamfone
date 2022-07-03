<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'name'      => 'Brasil',
            'id_iso3166'    => 'BR'
        ]);

        Country::create([
            'name'      => 'United States of America',
            'id_iso3166'    => 'US'
        ]);
    }
}
