<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShelvesController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/', HomeController::class)->name('home');

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart', [CartController::class, 'store'])
    // ->middleware(['auth', 'verified'])
    ->name('cart.store');

Route::get('/products', [ProductController::class, 'index'])
    ->middleware('throttle')
    ->name('products.index');

Route::get('/products/detail/{id}', DetailController::class)->name('products.detail');

Route::get('notification', function () {
    return Inertia::render('notification');
})->middleware(['auth', 'verified'])->name('notification');

Route::prefix('admin')->name('admin.')->middleware(['admin'])->group(function () {

    // User
    Route::get('/', [UserController::class, 'index'])->name('user.index');

    Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');

    Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('user/{id}/edit', function ($id) {
        return Inertia::render('Admin/UserEdit', [
            'user' => User::find($id)
        ]);
    })->name('user.edit');
    
    Route::resource('shelves',ShelvesController::class)->name('get','shelves');

    Route::get('categories',function(){
        echo 'test';
    })->name('categories');

    Route::resource('product', AdminProductController::class)->names([
        'index' => 'product',
        'edit' => 'product.edit',
        'create' => 'product.create',
        'store' => 'product.store',
        'update' => 'product.update',
        'destroy' => 'product.destroy',
    ]);

    //order
    Route::resource('order', OrderController::class)->names([
        'index' => 'order',
        'edit' => 'order.edit',
        'create' => 'order.create',
        'store' => 'order.store',
        'update' => 'order.update',
        'destroy' => 'order.destroy'
    ]);
});

Route::get(
    '/users',
    function () {
        return Inertia::render('Users/Index', [
            'users' => User::query()
                ->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(function ($user) {
                    return [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email
                    ];
                }),
            'filters' => Request::only(['search']),
        ]);
    }
)->name('users');

Route::get('/users/create', function () {
    return Inertia::render('Users/Create');
})->name('users.create');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
