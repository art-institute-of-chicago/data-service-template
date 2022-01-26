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
        ];

        return parent::transform($data);
    }
}
