<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DetailController extends Controller
{
    //
    public function __invoke($id)
    {
        
        return Inertia::render('Products/Detail');
    }
}
