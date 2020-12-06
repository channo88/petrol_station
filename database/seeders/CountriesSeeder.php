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
            'name' => 'España',
            'capital' => 'Madrid',
            'country_numeric_prefix' => '34',
            'lang_code' => 'es',
            'lang_name' => 'Español',
            'currency_code' => '1',
            'currency_name' => 'Euro',
            'currency_symbol' => '€',
        ]);
    }
}
