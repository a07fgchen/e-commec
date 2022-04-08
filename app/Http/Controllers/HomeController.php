<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        return Inertia::render('HomePage/Index',[
            'products' =>Product::take(4)->get()
        ]);
    }
}
