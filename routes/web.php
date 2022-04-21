<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::post('/cart', [CartController::class, 'create'])
    // ->middleware(['auth', 'verified'])
    ->name('cart.create');

Route::get('/products', [ProductController::class, 'index'])
    ->middleware('throttle')
    ->name('products.index');

Route::get('/products/detail/{id}', DetailController::class)->name('products.detail');

Route::get('notification', function () {
    return Inertia::render('notification');
})->middleware(['auth', 'verified'])->name('notification');

Route::middleware(['auth','verified'])->group(function(){
  Route::get('/user',function(){
      return 'test';
  });
});






Route::get(
    '/setting',
    function () {
        return Inertia::render('Setting');
    }
)->name('setting');

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

Route::post('/users', function () {
    $attibutes = Request::validate([
        'name' => 'required',
        'email' => ['required', 'email'],
        'password' => 'required'
    ]);
    User::create($attibutes);

    return redirect('/users');
})->name('users.new');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
