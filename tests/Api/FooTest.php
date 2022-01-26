<?php

namespace Tests\Api;

use Tests\ApiTestCase as BaseTestCase;

class FooTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/foos';

    protected $model = \App\Models\Foo::class;
}
