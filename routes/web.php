<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapXmlController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/importArticle/{mdp}', [HomeController::class, 'importArticle']);
Route::view('/a-propos', 'about');
Route::get('/category/{category}', [CategoryController::class, 'index']);
Route::get('/article/{slug}', [ArticleController::class, 'index']);
Route::get('/sitemap.xml', [SitemapXmlController::class, 'index']);
