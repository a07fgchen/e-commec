<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DetailController extends Controller
{
    //
    public function __invoke($id)
    {
        $products = ProductDetail::with(['galleries'])->find($id);
        
        return Inertia::render('Products/Detail', [
            'products' => $products
        ]);
    }
}
