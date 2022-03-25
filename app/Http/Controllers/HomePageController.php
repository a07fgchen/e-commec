<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomePageController extends Controller
{
    //
    public function index()
    {
        $product = Product::get(['name', 'description'])->toArray();
        
        return Inertia::render(
            'HomePage',
            [
                'products' => $product,
                'categories' => Categories::get(['id', 'name'])->toArray(),
            ]
        );
    }

    public function show($id)
    {

    }
}
