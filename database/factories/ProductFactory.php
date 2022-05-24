<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'spu' =>Str::random(10),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl(1080,1440)
        ];
    }
}
