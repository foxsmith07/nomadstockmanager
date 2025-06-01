<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/',[PublicController::class, 'index'])->name('dashboard');

//? ITEMS
Route::get('/stock',[ItemController::class, 'index'])->name('stock.index');
Route::get('/item/{item}',[ItemController::class, 'show'])->name('stock.show');