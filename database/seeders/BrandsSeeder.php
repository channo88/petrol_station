<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\City;
use App\Models\Country;
use App\Models\Town;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
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
                'cif' => 'A08004871',
                'fiscal_name' => 'Nissan Motor Iberica S.A.',
                'trade_name' => 'Nissan',
                'street' => 'Avenida Gran Via De Hospitalet, 149-151',
                'town_id' => Town::where('name', 'Hospitalet De Llobregat')->first()->id,
                'city_id' => City::where('name', 'Barcelona')->first()->id,
                'country_id' => Country::where('name', 'España')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ] , [
                'cif' => 'A80070030',
                'fiscal_name' => 'Suzuki Motor Iberica S.A.',
                'trade_name' => 'Suzuki',
                'street' => 'C/ de Carlos Sainz(Pg Ciudad del automóvil), 35',
                'town_id' => Town::where('name', 'Leganes')->first()->id,
                'city_id' => City::where('name', 'Madrid')->first()->id,
                'country_id' => Country::where('name', 'España')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ] , [
                'cif' => 'A60198512',
                'fiscal_name' => 'Volkswagen Group España Distribucion S.A.',
                'trade_name' => 'Audi',
                'street' => 'C/ La Selva',
                'town_id' => Town::where('name', 'El Prat del Llobregat')->first()->id,
                'city_id' => City::where('name', 'Barcelona')->first()->id,
                'country_id' => Country::where('name', 'España')->first()->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            
        ];
        Brand::insert($insert);
        Brand::factory()
            ->times(97)
            ->create();
    }
}