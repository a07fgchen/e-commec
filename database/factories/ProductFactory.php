<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Str;

class ProductFactory extends Factory
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
            'name' => $this->faker->words(1, true),
            'description' => $this->faker->text(),
            'quantity' => $this->faker->numberBetween(0, 9999),
            'price' => $this->faker->numberBetween(0, 9999),
            'image' => $this->faker->imageUrl(1080, 1440,null, true)
        ];
    }
}
