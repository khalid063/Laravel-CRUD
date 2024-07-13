<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');  //*** Should be post because form method is "post"
Route::get('/product/list/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');    //*** product list page a shwo korte chai
Route::put('/product/list/{product}/update', [ProductController::class, 'update'])->name('product.update'); //update the Edited data to database
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
