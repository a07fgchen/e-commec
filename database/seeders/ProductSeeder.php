<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Product::factory()
            ->count(4)
            ->has(
                Category::factory()->count(3)
            )
            ->has(Option::factory()->state(
                new Sequence(
                    ['name' => 'S'],
                    ['name' => 'M'],
                    ['name' => 'L'],
                    ['name' => 'XL']
                )
            ))
            ->create();
    }
}
