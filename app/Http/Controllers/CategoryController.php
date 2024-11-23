<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index($categoryName): View
    {
        $categoryName = str_replace("-", " ", $categoryName);
        $category = Category::where('name', $categoryName)->first();
        $articles = $category->article()->paginate(5); 
 
        return View("category", [
            "category" => ucfirst($categoryName),
            "articles" => $articles
        ]);
    }
}
