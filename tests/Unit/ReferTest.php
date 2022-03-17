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

        $link = url('') . '/refer/' . $user->refer;

        $response = $this->get($link);

        $response->assertOk();
    }
}
