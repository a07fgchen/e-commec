<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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
    // Product
    Route::get('product/create', function () {
        return Inertia::render('Admin/ProductItem', [
            'categories' => Category::all(['id', 'name']),
        ]);
    })->name('spu.create');

    Route::post('product', function (Request $request) {
        $id = $request->input('category_id');
        $data = $request->except(['category_id']);
        Product::create($data)->categories()->attach($id);
        return redirect()->route('admin.product');
    })->name('spu.store');

    Route::get('product/detail', [AdminProductController::class, 'index'])->name('product');

    Route::get('product/detail/{id}/edit', [AdminProductController::class, 'edit'])->name('product.edit');

    Route::get('product/detail/create', [AdminProductController::class, 'create'])->name('product.create');

    Route::get('product/detail/create', [AdminProductController::class, 'create'])->name('product.create');

    Route::post('product/detail', [AdminProductController::class, 'store'])->name('product.store');

    Route::put('product/detail/{id}', [AdminProductController::class, 'update'])->name('product.update');

    Route::delete('product/detail/{id}', [AdminProductController::class, 'destroy'])->name('product.delete');
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
