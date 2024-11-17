<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index($category): View
    {
        $category = str_replace("-", " ", $category);

        $articles =  DB::table("article as a")
            ->select("*")
            ->join("category as c", "a.category_id", "=", "c.id")
            ->join("variant as v", "a.id", "=", "v.article_id")
            ->where("c.name", "=", $category)
            ->get();

        return View("category", [
            "category" => ucfirst($category),
            "articles" => $articles
        ]);
    }
}
