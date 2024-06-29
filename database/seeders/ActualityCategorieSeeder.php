<?php

namespace Database\Seeders;

use App\Models\ActualitiesCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActualityCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActualitiesCategorie::create([
            'name'=>"Conseils agricoles"
        ]);
        ActualitiesCategorie::create([
            'name'=>"Etude de cas"
        ]);
        ActualitiesCategorie::create([
            'name'=>"Success stories"
        ]);
        ActualitiesCategorie::create([
            'name'=>"Article et mis à jour sur nos projets"
        ]);
        ActualitiesCategorie::create([
            'name'=>"Innovations et recherches"
        ]);
        ActualitiesCategorie::create([
            'name'=>"Evenement et collaboration"
        ]);
    }
}
