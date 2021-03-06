<?php

namespace Database\Seeders;

use App\Models\FuelType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FuelTypesSeeder extends Seeder
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
                'name' => 'Gasolina',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Diésel',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ], [
                'name' => 'Eléctrico',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        FuelType::insert($insert);
    }
}
