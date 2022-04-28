<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::create(
            [
                'name' => 'root',
                'email' => 'test@gmail.com',
                'email_verified_at' => now(),
                'password' =>  '00000000', // password
                'remember_token' => Str::random(10),
            ]
        );
    }
}
