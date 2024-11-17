<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $search = Request()->get("search");
        if ($search) {
            $articles =  DB::table("article as a")
                ->select("*")
                ->join("category as c", "a.category_id", "=", "c.id")
                ->join("variant as v", "a.id", "=", "v.article_id")
                ->where("a.title", "like", "%$search%")
                ->orWhere("a.information", "like", "%$search%")
                ->get();
        } else {
            $articles =  DB::table("article as a")
                ->select("*")
                ->join("category as c", "a.category_id", "=", "c.id")
                ->join("variant as v", "a.id", "=", "v.article_id")
                ->get();
        }

        return view('home', [
            'articles' => $articles
        ]);
    }
}
