<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $articles = Article::paginate(5);

        return view('home', [
            'articles' => $articles
        ]);
    }

    public function importArticle($mdp) {
        if($mdp === "GigaMdp123*") {
            Artisan::call('articles:import');
            return "Importation des articles terminée";
        } else {
            return "Mot de passe incorrect";
        }
    }
}
