<?php

namespace App\Http\Transformers;

use Aic\Hub\Foundation\AbstractTransformer;

class BarTransformer extends AbstractTransformer
{
    public function transform($item)
    {
        $data = [
            'id' => $item->id,
            'title' => $item->title,
            'foo_id' => $item->foo->id ?? null,
            'foo_title' => $item->foo->id ?? null,
            'baz' => [
                'a' => 'z',
                'b' => 42,
                'c' => true,
                'd' => null,
                'e' => null,
            ],
        ];

        return parent::transform($data);
    }
}
