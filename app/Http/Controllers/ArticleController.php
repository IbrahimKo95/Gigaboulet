<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index($slug): View
    {
        $article = Article::query()
            ->where('slug', $slug)
            ->firstOrFail();

        $previous = Article::query()
            ->where('published_at', '<', $article->published_at)
            ->orderBy('published_at', 'desc')
            ->first();

        $next = Article::query()
            ->where('published_at', '>', $article->published_at)
            ->orderBy('published_at', 'asc')
            ->first();

        return View("article", [
            "article" => $article,
            "next" => $next,
            "previous" => $previous
        ]);
    }
}
