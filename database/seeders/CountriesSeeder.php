<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create([
            'iso_code' => 'ES',
            'iso_code_3' => 'ES1',
            'name' => 'españa',
            'capital' => 'madrid',
            'country_numeric_prefix' => '34',
            'lang_code' => 'es',
            'lang_name' => 'español',
            'currency_code' => '1',
            'currency_name' => 'euro',
            'currency_symbol' => '€',
        ]);
    }
}
