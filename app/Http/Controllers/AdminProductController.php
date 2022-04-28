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
        return Inertia::render('Admin/Product', [
            'products' => Product::paginate(20)
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Admin/ProductEdit', [
            'product' => Product::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update($request->all());

        return redirect()->route('admin.product');
    }

    public function create()
    {
        return Inertia::render('Admin/ProductCreate', [
            'products' => Product::all(['id', 'name'])
        ]);
    }

    public function store(Request $request)
    {
        $id = $request->input('category_id');
        $data = $request->except(['category_id']);
        Product::create($data)->categories()->attach($id);
        return redirect()->route('admin.product');
    }

    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->route('admin.product');
    }
}
