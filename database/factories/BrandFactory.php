<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\City;
use App\Models\Country;
use App\Models\Town;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $town = Town::inRandomOrder()->first();
        return [
            'cif' => $this->faker->vat,
            'name' => $this->faker->lastName,
            'street' => $this->faker->streetAddress,
            'town_id' => $town->id,
            'city_id' => $town->city->id,
            'country_id' => $town->city->country->id
        ];
    }
}