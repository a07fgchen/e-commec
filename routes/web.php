<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomePageController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
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

Route::get('product', [ProductController::class, 'index'])->name('product');

Route::get('category', [CategoriesController::class, 'index'])->name('category');

Route::get('cart', function () {
    return Inertia::render('Cart');
})->name('cart');

Route::get('notification', function () {
    return Inertia::render('notification');
})->middleware(['auth', 'verified'])->name('notification');

Route::get('search', function () {
    return Inertia::render('search');
})->name('search');

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });
Route::get('/', function () {
    return Inertia::render('Index');
})->name('index');

Route::get(
    '/home',
    function () {
        return Inertia::render('Home');
    }
)->name('home');

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

Route::get('/users/create',function(){
    return Inertia::render('Users/Create');
})->name('users.create');

Route::post('/users',function(){
    $attibutes = Request::validate([
        'name' => 'required',
        'email' => ['required','email'],
        'password' => 'required'
    ]);
    User::create($attibutes);

    return redirect('/users');
})->name('users.new');

Route::get(
    '/users/{id}/edit',
    function () {
        return Inertia::render('Users/Index', [
            'users' => User::select(['id', 'name', 'email'])->paginate(10),
            'time' => now()->toTimeString()
        ]);
    }
)->name('user.edit');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
