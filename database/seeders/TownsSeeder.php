<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Town;
use Carbon\Carbon;
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
        $insert = [
            [
                'city_id' => City::first()->id,
                'name' => 'El Cónsul',
                'postal_code' => '29010',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'city_id' => City::first()->id,
                'name' => 'Teatinos',
                'postal_code' => '29010',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'city_id' => City::first()->id,
                'name' => 'Mijas',
                'postal_code' => '29651',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'city_id' => City::where('name', 'Madrid')->first()->id,
                'name' => 'Leganes',
                'postal_code' => '28914',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'city_id' => City::where('name', 'Madrid')->first()->id,
                'name' => 'Hospitalet De Llobregat',
                'postal_code' => '08908',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'city_id' => City::where('name', 'Barcelona')->first()->id,
                'name' => 'El Prat del Llobregat',
                'postal_code' => '08820',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        Town::insert($insert);
    }
}
