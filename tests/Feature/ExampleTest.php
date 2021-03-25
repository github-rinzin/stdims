<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = User::findOrFail(3);
        $response = $this->actingAs($user)->get('/dashboard/admin');

        $response->assertStatus(200);
    }
}
