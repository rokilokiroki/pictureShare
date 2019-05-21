<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Model\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogoutApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function setUp()
    {
      parent::setUp();
      $this->user = factory(User::class)->create();
    }

    public function test_should_resister_user_logout()
    {
        $response = $this->actingAs($this->user)
                         ->json('POST', route('logout'));
        $response->assertStatus(200);
        $this->assertGuest();
    }
}
