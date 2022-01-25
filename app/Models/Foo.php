<?php

namespace App\Models;

use Aic\Hub\Foundation\AbstractModel as BaseModel;

class Foo extends BaseModel
{
    public function bars()
    {
        return $this->hasMany(Bar::class);
    }
}
