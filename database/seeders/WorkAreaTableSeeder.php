<?php

namespace Database\Seeders;

use App\Models\WorkArea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkAreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkArea::create([
            'title'=>"Définir des objectifs clairs",
            'description'=>"Identifiez des objectifs spécifiques et mesurables alignés sur la vision de votre entreprise.",
            'number'=>1,
        ]);
        WorkArea::create([
            'title'=>"Élaborer une stratégie précise",
            'description'=>"Développez une stratégie détaillée, mettant en œuvre les moyens pour atteindre vos objectifs.",
            'number'=>2,
        ]);
        WorkArea::create([
            'title'=>"Mise en œuvre avec engagement",
            'description'=>"Exécutez votre plan avec rigueur et détermination, en mobilisant vos ressources de manière efficace.",
            'number'=>3,
        ]);
        WorkArea::create([
            'title'=>"Évaluer et ajuster en continu",
            'description'=>"Évaluez régulièrement les résultats obtenus, ajustez votre approche en fonction des retours, et restez agile dans votre démarche.",
            'number'=>4,
        ]);
    }
}
