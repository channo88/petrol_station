<?php

namespace Database\Seeders;

use App\Models\Fuel;
use App\Models\FuelType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FuelsSeeder extends Seeder
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
                'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
                'name' => 'Sin Plomo 95',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
                'name' => 'Sin Plomo 95 Premium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
                'name' => 'Sin Plomo 98',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
                'name' => 'Sin Plomo 100',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type_id' => FuelType::where('name', 'Diésel')->first()->id,
                'name' => 'Diésel Normal',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],[
                'type_id' => FuelType::where('name', 'Diésel')->first()->id,
                'name' => 'Diésel Premium',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'type_id' => FuelType::where('name', 'Eléctrico')->first()->id,
                'name' => 'Eléctrico',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        Fuel::insert($insert);
    }
}
