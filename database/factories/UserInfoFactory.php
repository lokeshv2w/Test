<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username'     => fake()->name(),
            'user_address' => fake()->address(),
            'user_phone'   => fake()->phoneNumber(),
            'user_photo'   => fake()->imageUrl(60, 60,),
            'user_age'     => fake()->numberBetween(18, 25),
            'user_city'    => fake()->city,
            'user_state'   => fake()->state,
            'user_country' => fake()->country
        ];
    }
}
