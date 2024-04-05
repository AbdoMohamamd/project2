<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Passenger>
 */
class PassengerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'email' => fake()->unique()->safeEmail,
            'password' => bcrypt(fake()->password),
            'dob' => fake()->dateTimeBetween('-80 years', '-18 years')->format('Y-m-d'),
            'passport_expiry_date' => fake()->dateTimeBetween('+1 years', '+10 years')->format('Y-m-d'),
        ];
    }
}
