<?php

namespace Tests\Feature\Admin;

use App\Models\Admin;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function itRedirectsToLoginPageIfNotAuthenticated(): void
    {
        $response = $this->get(route('admin.dashboard'));

        $response->assertRedirectToRoute('admin.auth.show-login-form');
    }

    /**
    * @test
    */
    public function itValidatesCredentials(): void
    {
        $response = $this->post(route('admin.auth.login'), [
            'email' => '',
            'password' => ''
        ]);

        $response->assertSessionHasErrors(['email', 'password']);
    }

    /**
    * @test
    */
    public function itCannotLoginUsingFakeAccount(): void
    {
        $res = Auth::guard('admin')->attempt(['email' =>'foo@email.com', 'password' => 'bar']);

        $this->assertFalse($res);

    }

    /**
    * @test
    */
    public function itCanLoginWithValidCredentials(): void
    {
        $admin = Admin::factory()->create();

        $login = Auth::guard('admin')->attempt(['email' => $admin->email, 'password' => '123']);

        $response = $this->actingAs($admin)->get(route('admin.auth.login', [
            'email' => $admin->email,
            'password' => '123'
        ]));

        $this->assertTrue($login);

        $response->assertRedirectToRoute('admin.dashboard');
    }
}
