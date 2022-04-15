<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Cart/Index');
    }

    public function create(Request $request)
    {
        
        dd($request->collect());
    }
}
