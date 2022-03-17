<?php

namespace Tests\Unit;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_get_home_page()
    {
        $response = $this->get(route('home'));
        $response->assertOk();
    }
}
