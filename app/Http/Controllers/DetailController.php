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
        $product = Product::select('id', 'name', 'description')->with([
            'productDetails' => function ($query) {
                $query->select('id', 'product_id', 'size', 'price');
            }, 'productDetails.galleries'
        ])->find($id);
        return Inertia::render('Products/Detail', [
            'product' => $product,
        ]);
    }
}
