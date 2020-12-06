<?php

namespace Database\Seeders;

use App\Models\CarModel;
use App\Models\FuelType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CountriesSeeder::class,
            CitiesSeeder::class,
            TownsSeeder::class,
            UsersSeeder::class,
            AutoTypesSeeder::class,
            BrandsSeeder::class,
            FuelTypesSeeder::class,
            FuelsSeeder::class,
            AutoModelsSeeder::class,
            ]);
    }
}
