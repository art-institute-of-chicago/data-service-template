<?php

namespace Tests;

use LogicException;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class AbstractTestCase extends BaseTestCase
{
    use CreatesApplication;
    use RefreshDatabase;

    protected $endpoint;

    protected $model;

    protected function setUp(): void
    {
        foreach (['endpoint', 'model'] as $property) {
            if (!isset($this->{$property})) {
                throw new LogicException(get_class($this) . ' missing $' . $property);
            }
        }

        parent::setUp();
    }

    public function test_it_shows_detail_endpoint()
    {
        $item = ($this->model)::factory()->create();

        $response = $this->getJson($this->endpoint . '/' . $item->id);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                'id',
                'title',
            ],
        ]);
    }
}
