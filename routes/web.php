<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketController;


Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/catalog', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/catalog/product/{id}', [ProductController::class, 'product'])->name('product');
Route::get('/about', [ProductController::class, 'about'])->name('about');

Route::get('/signIn', [UserController::class, 'signIn'])->name('signIn');
Route::post('/signIn', [UserController::class, 'signIn_valid'])->name('signIn_valid');
Route::get('/signUp', [UserController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [UserController::class, 'signUp_valid'])->name('signUp_valid');

Route::get('/account', [UserController::class, 'account'])->name('account');
Route::post('/account/update', [UserController::class, 'update_account'])->name('update_account');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['Role'])->group(function () {
});




