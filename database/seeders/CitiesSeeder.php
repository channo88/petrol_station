<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create([
            'country_id' => Country::first()->id,
            'name' => 'Málaga'
        ],[
            'country_id' => Country::first()->id,
            'name' => 'Barcelona'
        ],[
            'country_id' => Country::first()->id,
            'name' => 'Madrid'
        ],[
            'country_id' => Country::first()->id,
            'name' => 'Valencia'
        ]);
    }
}
