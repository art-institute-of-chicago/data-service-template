<?php

namespace Tests\Api;

use Aic\Hub\Foundation\Testing\EndpointTestCase as BaseTestCase;

class FooTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/foos';

    protected $model = \App\Models\Foo::class;
}
