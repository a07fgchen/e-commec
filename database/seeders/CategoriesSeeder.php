<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $array = [
            ['name' => 'Feature Products'],
            ['name' => 'Latest Products']
        ];
        
        foreach ($array as $key => $value) {
            Categories::create($value);
        }
    }
}
