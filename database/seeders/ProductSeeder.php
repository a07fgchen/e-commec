<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductDetail;
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
            ->has(
                ProductDetail::factory()->count(3)
                    ->has(
                        Gallery::factory()->count(4)
                    ),
                'productDetails'
            )
            ->create();
    }
}
