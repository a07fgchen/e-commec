<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        $products = Product::take(4)->get(['id', 'image', 'name']);
        
        return Inertia::render('HomePage/Index', [
            'products' => $products
        ]);
    }
}
