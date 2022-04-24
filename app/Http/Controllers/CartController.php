<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\ProductDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;


class CartController extends Controller
{
    //
    public function index()
    {
        $cart = Cart::with(['productDetails'])->get();
        return Inertia::render('Cart/Index', [
            'carts' => $cart
        ]);
    }

    public function store(Request $request)
    {
        $productDetails = $request->input('product');
        $data = [];

        foreach ($productDetails as $key => $productDetail) {
            $data[$key]['user_id'] = 1;
            $data[$key]['product_detail_id'] = $productDetail['id'];
            $data[$key]['quantity'] = $productDetail['quantity'];
            $data[$key]['created_at'] = now();
            $data[$key]['updated_at'] = now();
        }
        DB::table('carts')->insert($data);

        return redirect()->back();
    }
}
