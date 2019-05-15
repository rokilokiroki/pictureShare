<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Model\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegisterApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_should_return_resister_data()
    {
        $data = [
          'name' => 'vuesplash user',
          'email' => 'dummy@mail.com',
          'password' => 'test1234',
          'password_confirmation' => 'test1234'
        ];
        $response = $this->json('POST', route('register'), $data);

        $user = User::first();
        $this->assertEquals($data['name'], $user->name);
        // $response->assertJson(['name' => $user->name]);
    }
}
