<?php

namespace Tests\Feature;

use Tests\TestCase;

class FooTest extends TestCase
{
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(404);
    }
}
