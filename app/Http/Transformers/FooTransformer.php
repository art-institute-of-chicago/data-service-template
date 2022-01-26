<?php

namespace App\Http\Transformers;

use Aic\Hub\Foundation\AbstractTransformer;

class FooTransformer extends AbstractTransformer
{
    public function transform($item)
    {
        $data = [
            'id' => $item->id,
            'title' => $item->title,
            'bar_ids' => $item->bars->pluck('id'),
        ];

        return parent::transform($data);
    }
}
