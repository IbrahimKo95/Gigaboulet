<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $articlesData = json_decode(file_get_contents(base_path('/database/datasets/file-composant.json')), true);
        $this->addArticle($articlesData);

    }

    private function addArticle($articlesData)
    {
        foreach ($articlesData as $data) {
            $category = DB::table("category")->select("id")->where("name", $data["category"])->first();
            $article_id = DB::table("article")->insertGetId([
                "title" => $data["title"],
                "slug" => Str::slug($data["title"], '-'),
                "introduction" => $data["information"],
                "developpement" => $data["developpement"],
                "conclusion" => $data["conclusion"],
                "category_id" => $category->id,
                "author" => $data["author"],
                "published_at" => $data["published_at"],
                'updated_at' => now(),
                'created_at' => now()
            ]);
        }
    }
}
