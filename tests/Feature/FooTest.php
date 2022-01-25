<?php

namespace Tests\Feature;

use App\Models\Foo;
use Tests\TestCase;

class FooTest extends TestCase
{
    public function test_example()
    {
        $foo = Foo::factory()->create([
            'id' => 42,
            'title' => 'Example Title',
        ]);

        $response = $this->getJson('api/v1/foos/' . $foo->id);

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                'id' => 42,
                'title' => 'Example Title',
            ],
        ]);
    }
}
