<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $articlesData = json_decode(file_get_contents(base_path('/database/datasets/file-composant.json')), true);
        $this->addArticle($articlesData);
        $articlesData = json_decode(file_get_contents(base_path('/database/datasets/file-ordinateur-fixe.json')), true);
        $this->addArticle($articlesData);
        $articlesData = json_decode(file_get_contents(base_path('/database/datasets/file-ordinateur-portable.json')), true);
        $this->addArticle($articlesData);
        $articlesData = json_decode(file_get_contents(base_path('/database/datasets/file-tablette.json')), true);
        $this->addArticle($articlesData);
    }

    private function addArticle($articlesData)
    {
        foreach ($articlesData as $data) {
            $category = DB::table("category")->select("id")->where("name", $data["category"])->first();
            $article_id = DB::table("article")->insertGetId([
                "title" => $data["title"],
                "information" => $data["information"],
                "category_id" => $category->id,
                'updated_at' => now(),
                'created_at' => now(),
            ]);
            foreach ($data["variant"] as $variant) {
                DB::table("variant")->insert([
                    "color" => $variant["color"],
                    "size" => $variant["size"],
                    "price" => $variant["price"],
                    "weight" => $variant["weight"],
                    "fileName" => $variant["fileName"],
                    "quantity" => $variant["quantity"],
                    "url" => $variant["url"],
                    "article_id" => $article_id,
                    'updated_at' => now(),
                    'created_at' => now()
                ]);
            }
        }
    }
}
