<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminProductController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Admin/Product', [
            'products' => ProductDetail::paginate(20)
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('Admin/ProductEdit', [
            'product' => ProductDetail::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        ProductDetail::where('id', $id)->update($request->all());

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
        $data = $request->all();
        Product::find($data['product_id'])
            ->productDetails()
            ->create($data);
        return redirect()->route('admin.product');
    }

    public function destroy($id)
    {
        ProductDetail::find($id)->delete();

        return redirect()->route('admin.product');
    }
}
