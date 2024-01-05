<?php

namespace Tests\Feature\Front;

use App\Models\Location;
use App\Models\Property;
use App\Models\Type;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SearchPageTest extends TestCase
{
    /**
     * @test
     */
    public function itDisplayCorrectSearchResults(): void
    {
        $type = Type::whereSlug('condotel')->first();
        $location = Location::whereSlug('bekasi-selatan')->first();

        $property = Property::whereBelongsTo($type, 'relatedType')
            ->whereBelongsTo($location, 'relatedLocation')
            ->get();

        $request = $this->get(route('search-properties', [
            'type' => 'condotel',
            'location' => 'bekasi-selatan'
        ]));
        $request->assertOk();
        $request->assertSee($property->first()->name);
    }
}
