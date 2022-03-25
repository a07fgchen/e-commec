<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index()
    {
        return Inertia::render(
            'HomePage',
            [
                'products' => Product::get(['name','description'])->toArray(),
            ]
        );
    }
}
