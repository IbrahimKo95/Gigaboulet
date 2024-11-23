<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImportArticles extends Command
{
    protected $signature = 'articles:import {file=database/datasets/newArticles.json}';
    protected $description = 'Importer un article depuis un fichier JSON et le supprimer du fichier';

    public function handle()
    {
        $filePath = base_path($this->argument('file'));

        if (!file_exists($filePath)) {
            $this->error("Le fichier JSON n'existe pas : $filePath");
            return;
        }

        $articlesData = json_decode(file_get_contents($filePath), true);

        if (empty($articlesData)) {
            $this->error('Aucun article à importer.');
            return;
        }

        // Récupérer le premier article
        $data = array_shift($articlesData);

        // Vérifier que la catégorie existe
        $category = DB::table("category")
            ->select("id")
            ->where("name", $data["category"])
            ->first();

        if (!$category) {
            $this->error("Catégorie introuvable : " . $data["category"]);
            return;
        }

        // Insérer l'article dans la base de données
        DB::table("article")->insert([
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

        $this->info("Article importé : " . $data["title"]);

        // Mettre à jour le fichier JSON avec les articles restants
        file_put_contents($filePath, json_encode($articlesData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $this->info("Fichier JSON mis à jour. Article supprimé du fichier.");
    }
}
