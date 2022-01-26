<?php

namespace Tests\Feature;

use Tests\AbstractTestCase as BaseTestCase;

class FooTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/foos';

    protected $model = \App\Models\Foo::class;
}
