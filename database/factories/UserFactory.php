<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\Town;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $town = Town::inRandomOrder()->first();
        return [
            'dni' => $this->faker->dni,
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'street' => $this->faker->streetAddress,
            'mobile_phone' => $this->faker->e164PhoneNumber,
            'town_id' => $town->id,
            'city_id' => $town->city->id,
            'country_id' => $town->city->country->id,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}