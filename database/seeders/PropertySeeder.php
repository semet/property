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
        Property::factory(100)->create()
            ->each(function (Property $property) {
                $property->images()->createMany([
                   [
                       'property_id' => $property->id,
                       'url' => fake()->imageUrl(),
                       'alt' => fake()->sentence()
                   ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->imageUrl(),
                        'alt' => fake()->sentence()
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->imageUrl(),
                        'alt' => fake()->sentence()
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->imageUrl(),
                        'alt' => fake()->sentence()
                    ],
                    [
                        'property_id' => $property->id,
                        'url' => fake()->imageUrl(),
                        'alt' => fake()->sentence()
                    ]
                ]);
            });
    }
}
