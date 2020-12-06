<?php

namespace Database\Seeders;

use App\Models\Fuel;
use App\Models\FuelType;
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
        Fuel::create([
            'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
            'name' => 'Sin Plomo 95'
        ],[
            'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
            'name' => 'Sin Plomo 95 Premium'
        ],[
            'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
            'name' => 'Sin Plomo 98'
        ],[
            'type_id' => FuelType::where('name', 'Gasolina')->first()->id,
            'name' => 'Sin Plomo 100'
        ],[
            'type_id' => FuelType::where('name', 'Diésel')->first()->id,
            'name' => 'Diésel Normal'
        ],[
            'type_id' => FuelType::where('name', 'Diésel')->first()->id,
            'name' => 'Diésel Premium'
        ], [
            'type_id' => FuelType::where('name', 'Eléctrico')->first()->id,
            'name' => 'Eléctrico'
        ]);
    }
}
