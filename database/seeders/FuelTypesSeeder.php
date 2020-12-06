<?php

namespace Database\Seeders;

use App\Models\FuelType;
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
        FuelType::create([
            'name' => 'Gasolina',
        ], [
            'name' => 'Diésel',
        ], [
            'name' => 'Eléctrico',
        ]);
    }
}
