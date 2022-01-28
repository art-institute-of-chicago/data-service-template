<?php

namespace App\Models;

use Aic\Hub\Foundation\AbstractModel as BaseModel;

class Foo extends BaseModel
{
    protected $casts = [
        'id' => 'integer',
    ];

    public function bars()
    {
        return $this->hasMany(Bar::class);
    }
}
