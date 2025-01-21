<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $articles = Article::all();
        $categories = Category::all();
        return response()->view('sitemap', [
            'articles' => $articles,
            'categories' => $categories
        ])->header('Content-Type', 'text/xml');
    }
}
