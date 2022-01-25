<?php

namespace Database\Factories;

use App\Foo;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(6),
            'title' => ucfirst($this->faker->words(3, true)),
            'foo_id' => Foo::all()->get()->random(),
        ];
    }
}
