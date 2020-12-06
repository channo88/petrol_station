<?php

namespace Database\Seeders;

use App\Models\AutoType;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AutoTypesSeeder extends Seeder
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
                'name' => 'Coche',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Moto',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()

            ],
        ];

        AutoType::insert($insert);
    }
}
