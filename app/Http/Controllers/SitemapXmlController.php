<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class SitemapXmlController extends Controller
{
    public function index() {
        $articles = Article::all();
        return response()->view('sitemap', [
            'articles' => $articles
        ])->header('Content-Type', 'text/xml');
    }
}
