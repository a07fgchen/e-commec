<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
        $products = Product::with(['gallery' => function ($query) {
            $query->select('id', 'image');
        }])
            ->select('id', 'gallery_id', 'name')
            ->when($request->input('search'),function($query,$search) {
                $query->where('name','like',"%{$search}%");
            })
            ->paginate(3)
            ->withQueryString();

        return Inertia::render('Products/Index', [
            'products' => $products,
            'filter' => request()->only(['search'])
        ]);
    }
}
