<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProcessWork;

class ProcessWorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProcessWork::create([
            'firstTitle' => 'Définir des objectifs clairs',
            'secondTitle' => 'Élaborer une Stratégie Précise',
            'thirdTitle' => 'Mise en Œuvre avec Engagement',
            'fourthTitle' => 'Évaluer et Ajuster en Continu',
            'firstDescription' => "Identifiez des objectifs spécifiques et mesurables alignés sur la vision de votre entreprise.",
            'secondDescription' => "Développez une stratégie détaillée, mettant en œuvre les moyens pour atteindre vos objectifs.",
            'thirdDescription' => "Exécutez votre plan avec rigueur et détermination, en mobilisant vos ressources de manière efficace.",
            'fourthDescription' => "Évaluez régulièrement les résultats obtenus, ajustez votre approche en fonction des retours, et restez agile dans votre démarche.",
        ]);
    }
}
