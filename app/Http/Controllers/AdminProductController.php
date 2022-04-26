<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminProductController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Admin/Product',[
            'products' => Product::all()
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Admin/ProductEdit',[
            'product' => Product::find($id)
        ]);
    }

    public function update($id)
    {
        return Inertia::render('Admin/ProductEdit',[
            'product' => Product::find($id)
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/ProductCreate');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Product::create($data);
    }
    
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('admin.product');
    }
}
