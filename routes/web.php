<?php

use App\Http\Controllers\Auth\LogController;
use App\Http\Controllers\Auth\RegController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\User\Profile\ProfileController;
use App\Http\Controllers\User\Cart\CartContoller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('main');

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::get('/registration', [RegController::class, 'regForm'])->name('regForm');
    Route::post('/register', [RegController::class, 'register'])->name('register');
    Route::get('/authorization', [LogController::class, 'logForm'])->name('logForm');
    Route::post('/authorize', [LogController::class, 'loginer'])->name('loginer');
});

Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user'], function () {
    Route::group(['namespace' => 'Cart', 'prefix' => 'cart'], function () {
        Route::get('/index', [CartContoller::class, 'index'])->name('cart.index');
    });
    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function () {
        Route::get('/index', [ProfileController::class, 'index'])->name('profile.index');
        Route::get('/logOut', [ProfileController::class, 'logOut'])->name('profile.logOut');
    });
});


Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'product'], function () {
    Route::get('/home', [ProductController::class, 'index'])->name('product.home');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::patch('/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete', [ProductController::class, 'delete'])->name('product.delete');


    // Route::get('/filter', [ProductController::class, 'filter'])->name('product.filter');
});
