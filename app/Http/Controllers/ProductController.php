<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index(Product $product)
    {
        return Inertia::render('HomePage',['items'=>$product->toArray()]);
    }
}
