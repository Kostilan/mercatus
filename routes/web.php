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
Route::get('/catalog/product/basket_create/{id}', [ProductController::class, 'basket_create'])->name('basket_create')->middleware('auth');
Route::get('/about', [ProductController::class, 'about'])->name('about');

Route::get('/signIn', [UserController::class, 'signIn'])->name('signIn');
Route::post('/signIn', [UserController::class, 'signIn_valid'])->name('signIn_valid');
Route::get('/signUp', [UserController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [UserController::class, 'signUp_valid'])->name('signUp_valid');

Route::get('/account', [UserController::class, 'account'])->name('account')->middleware('auth');
Route::post('/account/update', [UserController::class, 'update_account'])->name('update_account')->middleware('auth');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::middleware(['Role'])->group(function () {
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'product_delete'])->name('product_delete');
    Route::get('/admin/update/{id}', [AdminController::class, 'product_update'])->name('product_update');
    Route::get('/admin/create', [AdminController::class, 'product_create'])->name('product_create');
    Route::post('/admin/create', [AdminController::class, 'product_create_valid'])->name('product_create_valid');

    Route::delete('/admin/brand/delete/{id}', [AdminController::class, 'brand_delete'])->name('brand_delete');
    Route::get('/admin/brand/update/{id}', [AdminController::class, 'brand_update'])->name('brand_update');
    Route::post('/admin/brand/update', [AdminController::class, 'brand_update_valid'])->name('brand_update_valid');
    Route::get('/admin/brand/create', [AdminController::class, 'brand_create'])->name('brand_create');
    Route::post('/admin/brand/create', [AdminController::class, 'brand_create_valid'])->name('brand_create_valid');

    Route::delete('/admin/category/delete/{id}', [AdminController::class, 'category_delete'])->name('category_delete');
    Route::get('/admin/category/update/{id}', [AdminController::class, 'category_update'])->name('category_update');
    Route::post('/admin/category/update', [AdminController::class, 'category_update_valid'])->name('category_update_valid');
    Route::get('/admin/category/create', [AdminController::class, 'category_create'])->name('category_create');
    Route::post('/admin/category/create', [AdminController::class, 'category_create_valid'])->name('category_create_valid');
});
