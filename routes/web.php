<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;


Route::get('/news/{id}', [HomeController::class, 'show'])->name('news.show');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('news.search');
Route::get('/category/{category}', [CategoryController::class, 'showCategory'])->name('category.show');


