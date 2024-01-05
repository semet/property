<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\Agent;
use App\Models\Location;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AgentControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function itCannotBeAccessedByUnauthenticatedUser(): void
    {
        $response = $this->get(route('admin.agent.index'));

        $response->assertRedirectToRoute('admin.auth.show-login-form');
    }

    /**
    * @test
    */
    public function itCannotSaveAgentWithInvalidInputs(): void
    {
        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->post(route('admin.agent.store'), [
            'location_id' => '',
            'name' => '',
            'phone' => '',
            'email' => '',
        ]);

        $response->assertSessionHasErrors(['location_id', 'name', 'phone']);
    }

    /**
    * @test
    */
    public function itStoresAnAgentWithPhoto(): void
    {
        Storage::fake('public/agents');
        $location = Location::factory()->create();
        // Create a sample photo file
        $photo = UploadedFile::fake()->image('agent_photo.jpg');

        $data = [
            'location_id' => $location->id,
            'name' => 'Test Name',
            'phone' => fake()->phoneNumber,
            'email' => fake()->safeEmail,
            'password' => 'secret',
            'photo' => $photo,
        ];

        $admin = Admin::factory()->create();

        $response = $this->actingAs($admin, 'admin')->post(route('admin.agent.store'), $data);

        $response->assertRedirectToRoute('admin.agent.index');

        $this->assertDatabaseCount('agents', 1);

        $this->assertDatabaseHas('agents', [
            'name' => $data['name']
        ]);

        $agent = Agent::first();
        $this->assertNotNull($agent->photo);

        Storage::disk('public')->assertExists('agents/' . $agent->photo);
    }
}
