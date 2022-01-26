<?php

namespace Tests\Feature;

use Tests\AbstractTestCase as BaseTestCase;

class BarTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/bars';

    protected $model = \App\Models\Bar::class;
}
