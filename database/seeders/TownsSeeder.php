<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Town;
use Illuminate\Database\Seeder;

class TownsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Town::create([
            'city_id' => City::first()->id,
            'name' => 'El Cónsul',
            'postal_code' => 29010,
        ],[
            'city_id' => City::first()->id,
            'name' => 'Teatinos',
            'postal_code' => 29010,
        ],[
            'city_id' => City::first()->id,
            'name' => 'Mijas',
            'postal_code' => 29651,
        ]);
    }
}
