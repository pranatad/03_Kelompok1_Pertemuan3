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


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/product', [App\Http\Controllers\HomeController::class, 'product'])->name('product');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');

Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');