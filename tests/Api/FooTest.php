<?php

namespace Tests\Api;

use Aic\Hub\Foundation\Testing\EndpointTestCase as BaseTestCase;

class FooTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/foos';

    protected $model = \App\Models\Foo::class;

    protected function fields()
    {
        return [
            'id' => 'integer',
            'title' => 'string',
            'bar_ids' => self::refIds(BarTest::class),
            'bar_titles' => self::refTitles(),
        ];
    }
}
