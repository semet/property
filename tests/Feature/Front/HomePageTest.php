<?php

namespace Tests\Feature\Front;

use App\Models\Agent;
use App\Models\Location;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * @test
     */
    public function itCanVisitHomepage(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function itShowsEightLocationsWithMostProperties(): void
    {
        $locations = Location::withCount('properties')
            ->orderBy('properties_count', 'DESC')
            ->limit(8)
            ->get();

        $this->assertEquals(8, $locations->count());
    }

    /**
    * @test
    */
    public function itShowsSixPropertiesWithLowestPrice(): void
    {
        $properties = Property::orderBy('price', 'asc')->limit(6)->get();

        $this->assertEquals(6, $properties->count());
    }
    /**
    * @test
    */
    public function itShowsTenAgentsWithMostProperties(): void
    {
        $agents = Agent::limit(10)->withCount('properties')->get();

        $this->assertEquals(10, $agents->count());
    }
    /**
    * @test
    */
    public function itShowSomeTextFromWhyChooseUsComponent(): void
    {
        $response = $this->get('/');

        $response->assertSee('Wide Renge Of Properties');

    }

    /**
    * @test
    */
    public function itDisplaysSomeDatabaseCount(): void
    {
        $properties = Property::count();
        $agents = Agent::count();
        $locations = Location::count();
        $types = Type::count();

        $this->assertIsInt($properties);
        $this->assertIsInt($locations);
        $this->assertIsInt($agents);
        $this->assertIsInt($types);
    }
    /**
    * @test
    */
    public function isShowsTenMostPopularProperties(): void
    {
        $properties = Property::inRandomOrder()->limit(10)->get();

        $this->assertEquals(10, $properties->count());
    }
}
