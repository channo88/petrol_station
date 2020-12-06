<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
use Carbon\Carbon;
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
        $insert = [
                [
                'country_id' => Country::where('name', 'España')->first()->id,
                'name' => 'Málaga',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'country_id' => Country::where('name', 'España')->first()->id,
                'name' => 'Barcelona',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'country_id' => Country::where('name', 'España')->first()->id,
                'name' => 'Madrid',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'country_id' => Country::where('name', 'España')->first()->id,
                'name' => 'Valencia',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        City::insert($insert);
    }
}
