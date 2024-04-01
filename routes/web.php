<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
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
    return view('welcome');
});



Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/products/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('/products/{id}/restore', [ProductController::class, 'restore'])->name('product.restore');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::delete('/products/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/suppliers', [SupplierController::class, 'index'])->name('supplier.index');
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('supplier.create');
Route::post('/suppliers', [SupplierController::class, 'store'])->name('supplier.store');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('supplier.edit');
Route::post('/suppliers/{id}', [SupplierController::class, 'update'])->name('supplier.update');
Route::get('/suppliers/{id}/restore', [SupplierController::class, 'restore'])->name('supplier.restore');
Route::delete('/suppliers/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');
Route::delete('/suppliers/{id}/destroy', [SupplierController::class, 'destroy'])->name('supplier.destroy');
