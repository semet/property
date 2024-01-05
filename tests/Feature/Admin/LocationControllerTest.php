<?php

namespace Tests\Feature\Admin;

use App\Http\Controllers\Admin\LocationController;
use App\Http\Requests\LocationRequest;
use App\Models\Admin;
use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class LocationControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function itCannotBeAccessedByUnauthenticatedUser(): void
    {
        $response = $this->get(route('admin.location.index'));

        $response->assertRedirectToRoute('admin.auth.show-login-form');
    }

    /**
    * @test
    */
    public function itShowsAllLocation(): void
    {
        $locations = Location::factory(10)->create();
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->get(route('admin.location.index'));

        $response->assertOk()
            ->assertSee($locations->first()->name);

        $this->assertDatabaseCount('locations', 10);
    }

    /** @test */
    public function itStoresALocationWithPhoto()
    {
        Storage::fake('public/location');

        // Create a sample photo file
        $photo = UploadedFile::fake()->image('location_photo.jpg');

        $data = [
            'name' => 'Test Location',
            'address' => '123 Test St',
            'photo' => $photo,
        ];
        // Act
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->post(route('admin.location.store'), $data);

        // Assert
        $this->assertDatabaseHas('locations', [
            'slug' => Str::slug($data['name']),
            'name' => $data['name'],
            'address' => $data['address'],
        ]);

        $location = Location::where('name', $data['name'])->first();
        $this->assertNotNull($location->image);

        Storage::disk('public')->assertExists('location/' . $location->image);
    }
    /**
    * @test
    */
    public function itUpdatesTheLocation(): void
    {
        // Mock the Storage facade
        Storage::fake('public');
        // Create a mock LocationRequest with the necessary data
        $request = new LocationRequest([
            'name' => 'Test Location',
            'address' => 'Test Address',
            'photo' => UploadedFile::fake()->image('test_image.jpg')
        ]);

        // Create a mock Location instance
        $location = Location::factory()->create([
            'name' => 'Old Name',
            'address' => 'Old Address',
            'image' => UploadedFile::fake()->image('old_image.jpg')
        ]);

        // Call the update function
        $controller = new LocationController(); // Replace YourLocationController with the actual controller name
        $controller->update($request, $location);

        // Assert that the location has been updated correctly
        $this->assertEquals('test-location', $location->slug);
        $this->assertEquals('Test Location', $location->name);
        $this->assertEquals('Test Address', $location->address);

        // Assert that the image file has been uploaded and old image deleted
        Storage::disk('public')->assertMissing('location/old_image.jpg');
//        Storage::disk('public')->assertExists('location/'. $location->image);
    }
}
