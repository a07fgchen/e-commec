<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'sku' => Str::random(10),
            'color' => Str::random(5),
            'size' => Str::random(1),
            'quantity' => $this->faker->randomNumber(),
            'price' => $this->faker->randomNumber(),
        ];
    }
}
