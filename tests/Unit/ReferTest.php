<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class ReferTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_url()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $link = url('') . '/refer/' . $user->refer;

        $response = $this->get($link);

        $response->assertRedirect(route('home'));
    }
}
