<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Seo;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Seo::create([
            'page' => "Accueil",
        ]);

        Seo::create([
            'page' => "Service",
        ]);

        Seo::create([
            'page' => "A propos",
        ]);

        Seo::create([
            'page' => "Actualités",
        ]);

        Seo::create([
            'page' => "Contact",
        ]);
    }
}
