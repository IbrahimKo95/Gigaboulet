<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $catergories = ["intelligence artificielle", "cybersécurité", "réalité augmentée", "réseaux", "automobile"];

        foreach ($catergories as $category) {
            DB::table("category")->insert([
                "name" => $category,
                'updated_at' => now(),
                'created_at' => now(),
            ]);
        }
    }
}
