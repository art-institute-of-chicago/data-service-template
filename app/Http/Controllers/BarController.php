<?php

namespace App\Http\Controllers;

use Aic\Hub\Foundation\AbstractController as BaseController;

class BarController extends BaseController
{
    protected $model = \App\Models\Bar::class;

    protected $transformer = \App\Http\Transformers\BarTransformer::class;
}
