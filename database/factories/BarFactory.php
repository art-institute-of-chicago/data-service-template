<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarFactory extends Factory
{
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomNumber(6),
            'title' => ucfirst($this->faker->words(3, true)),
        ];
    }
}
