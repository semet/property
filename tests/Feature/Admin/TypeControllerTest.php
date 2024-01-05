<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use App\Models\Type;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Tests\TestCase;

class TypeControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function itCannotBeAccessedByUnauthenticatedUser(): void
    {
        $response = $this->get(route('admin.type.index'));

        $response->assertRedirectToRoute('admin.auth.show-login-form');
    }

    /**
    * @test
    */
    public function itValidatesTheRequest(): void
    {
        $admin = Admin::factory()->create();
        $response = $this->actingAs($admin, 'admin')->post(route('admin.type.store'), [
            'name' => ''
        ]);
        $response->assertSessionHasErrors(['name']);
        $this->assertDatabaseEmpty('types');
    }

    /**
    * @test
    */
    public function itCanStoreData(): void
    {
        $admin = Admin::factory()->create();
        $response = $this->actingAs($admin, 'admin')->post(route('admin.type.store'), [
            'name' => 'foo',
            'slug' => Str::slug('fo bar')
        ]);

        $response->assertSessionHas('success', 'Input data Tipe berhasil');
        $this->assertDatabaseHas('types', ['name' => 'foo']);

    }

    /**
    * @test
    */
    public function itDeletesATypeAndRedirectsToIndexWithSuccessMessage(): void
    {
        $type = Type::factory()->create();
        $admin = Admin::factory()->create();

        // Act
        $response = $this->actingAs($admin, 'admin')->get(route('admin.type.delete', $type));

        // Assert
        $response->assertRedirect(route('admin.type.index'));
        $this->assertDatabaseMissing('types', ['id' => $type->id]);
        $response->assertSessionHas('success', 'Data Tipe berhasil dihapus');
    }
}
