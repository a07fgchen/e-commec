<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index()
    {
        $products = Product::with(['gallery' => function ($query) {
            $query->select('id', 'image');
        }])
        ->get(['id', 'gallery_id', 'name'])
        ->toArray();
        
        foreach($products as $key => $product)
        {
            $products[$key]['gallery']['image'] = isset($products[$key]['gallery'])?$products[$key]['gallery']['image']:'';
        }
        return Inertia::render('Products/Index',[
            'products' => $products
        ]);
    }
}
