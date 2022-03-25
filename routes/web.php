<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/',[HomePageController::class,'index'])->name('homepage');

Route::get('product',[ProductController::class,'index'])->name('product');

Route::get('category',[CategoriesController::class,'index'])->name('category');

Route::get('cart', function () {
    return Inertia::render('Cart');
})->name('cart');

Route::get('notification', function () {
    return Inertia::render('notification');
})->middleware(['auth', 'verified'])->name('notification');

Route::get('search', function () {
    return Inertia::render('search');
})->name('search');

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
