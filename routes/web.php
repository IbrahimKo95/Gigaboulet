<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::view('/a-propos', 'about');
Route::get('/{category}', [CategoryController::class, 'index']);
Route::get('/article/{slug}', [ArticleController::class, 'index']);
