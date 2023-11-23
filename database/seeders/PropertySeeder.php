<?php

namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Property::factory(200)->create()
            ->each(function (Property $property) {
                $property->images()->createMany([
                    [
                        'property_id' => $property->id,
                        'url' => fake()->numberBetween($min = 1, $max = 9),
                        'alt' => fake()->sentence(3)
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->numberBetween($min = 1, $max = 9),
                        'alt' => fake()->sentence(3)
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->numberBetween($min = 1, $max = 9),
                        'alt' => fake()->sentence(3)
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->numberBetween($min = 1, $max = 9),
                        'alt' => fake()->sentence(3)
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->numberBetween($min = 1, $max = 9),
                        'alt' => fake()->sentence(3)
                    ]
                ]);
            });
    }
}
