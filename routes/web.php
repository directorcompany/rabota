<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::get('/username', [App\Http\Controllers\HomeController::class, 'username'])->name('username');
Route::get('/order/{name}/{prod}', [App\Http\Controllers\HomeController::class, 'order'])->name('name');
// Route::get('/coin', [App\Http\Controllers\HomeController::class, 'coin'])->name('coin');
// Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');
// Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');