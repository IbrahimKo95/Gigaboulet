<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index($slug): View
    {
        $article = Cache::remember("article-{$slug}", now()->addMinutes(10), function () use ($slug) {
            return Article::query()
                ->where('slug', $slug)
                ->firstOrFail();
        });

        $previous = Cache::remember("article-{$slug}-previous", now()->addMinutes(10), function () use ($article) {
            return Article::query()
                ->where('published_at', '<', $article->published_at)
                ->orderBy('published_at', 'desc')
                ->first();
        });

        $next = Cache::remember("article-{$slug}-next", now()->addMinutes(10), function () use ($article) {
            return Article::query()
                ->where('published_at', '>', $article->published_at)
                ->orderBy('published_at', 'asc')
                ->first();
        });

        return View("article", [
            "article" => $article,
            "next" => $next,
            "previous" => $previous
        ]);
    }
}
