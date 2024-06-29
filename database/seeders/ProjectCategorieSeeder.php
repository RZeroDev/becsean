<?php

namespace Database\Seeders;

use App\Models\ProjectCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectCategorie::create([
            'name'=>"Projets en cours",
        ]);
        ProjectCategorie::create([
            'name'=>"Projets en achevés",
        ]);
        ProjectCategorie::create([
            'name'=>"Opportunités de collaboration",
        ]);
    }
}
