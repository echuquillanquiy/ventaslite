<?php

use App\Http\Livewire\CoinsController;
use App\Http\Livewire\PosController;
use App\Http\Livewire\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('categories', CategoriesController::class);
Route::get('products', ProductsController::class);
Route::get('coins', CoinsController::class);
Route::get('pos', PosController::class);

