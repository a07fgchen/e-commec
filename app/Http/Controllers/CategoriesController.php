<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoriesController extends Controller
{
    //
    public function index(Request $request)
    {
        $id = $request->input('category');
        
        $product = Categories::find($id)->product;
        return Inertia::render(
            'HomePage',
            [
                'products' => $product,
            ]
        );
    }
}
