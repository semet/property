<?php

namespace Database\Factories;

use App\Enums\StatusEnum;
use App\Models\Agent;
use App\Models\Location;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => Type::all()->random()->slug,
            'location' => Location::all()->random()->slug,
            'agent_id' => Agent::all()->random()->id,
            'property_id' => Str::of(Str::random(10))->upper(),
            'slug' => Str::of(fake()->sentence(5))->slug(),
            'name' => fake()->sentence(5),
            'status' => fake()->randomElement(array_column(StatusEnum::cases(), 'value')),
            'price' => fake()->numberBetween($min = 1500, $max = 6000),
            'room' => fake()->numberBetween($min = 2, $max = 6),
            'bedroom' => fake()->numberBetween($min = 1, $max = 4),
            'bathroom' => fake()->numberBetween($min = 1, $max = 4),
            'garage' => fake()->numberBetween($min = 1, $max = 3),
            'built_year' => fake()->date(),
            'area' => fake()->numberBetween($min = 100, $max = 200),
            'description' => fake()->paragraph(40),
            'is_available' => fake()->randomElement([true, false])

        ];
    }
}
