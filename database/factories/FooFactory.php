<?php

namespace Database\Factories;

use Aic\Hub\Foundation\AbstractFactory as BaseFactory;

class FooFactory extends BaseFactory
{
    public function definition()
    {
        return [
            'id' => $this->getValidId(),
            'title' => $this->getTitle(),
        ];
    }
}
