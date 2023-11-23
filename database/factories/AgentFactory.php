<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => Location::all()->random()->id,
            'name' => fake()->name(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->safeEmail(),
            'password' => bcrypt('secret'),
            'email_verified_at' => now(),
            'photo' => 'a-' . fake()->numberBetween($min = 1, $max = 8) . '.png'
        ];
    }
}
