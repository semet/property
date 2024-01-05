<?php

namespace Tests\Feature\Front;

use App\Models\Property;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PropertyDetailPageTest extends TestCase
{
    /**
     * @test
     */
    public function itDisplaysCorrectProperty(): void
    {
        $property = Property::first();
        $response = $this->get(route('property', $property->slug));

        $response->assertStatus(200);
        $response->assertSee($property->name);
    }
}
