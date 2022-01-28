<?php

namespace Tests\Api;

use Aic\Hub\Foundation\Testing\EndpointTestCase as BaseTestCase;

class BarTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/bars';

    protected $model = \App\Models\Bar::class;
}
