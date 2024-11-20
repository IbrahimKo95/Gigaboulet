<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index($article_id, $color = null): View
    {
        if ($color) {
            $article =  DB::table("article as a")
                ->select("*")
                ->join("category as c", "a.category_id", "=", "c.id")
                ->where("a.id", "=", $article_id)
                ->where("v.color", "=", $color)
                ->first();
        } else {
            $article =  DB::table("article as a")
                ->select("*")
                ->join("category as c", "a.category_id", "=", "c.id")
                ->where("a.id", "=", $article_id)
                ->first();
        }
        return View("article", [
            "article" => $article
        ]);
    }
}
