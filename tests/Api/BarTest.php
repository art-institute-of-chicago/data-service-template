<?php

namespace Tests\Api;

use Aic\Hub\Foundation\Testing\EndpointTestCase as BaseTestCase;

class BarTest extends BaseTestCase
{
    protected $endpoint = 'api/v1/bars';

    protected $model = \App\Models\Bar::class;

    protected function fields()
    {
        return [
            'id' => 'integer',
            'title' => 'string',
            'foo_id' => self::refId(FooTest::class),
            'foo_title' => self::refTitle(),
            'baz' => [
                'a' => 'string',
                'b' => 'integer',
                'c' => 'boolean',
                'd' => 'null',
                'e' => null,
                'f' => function ($value) {
                    return 23 < $value && $value < 25;
                },
            ],
        ];
    }
}
