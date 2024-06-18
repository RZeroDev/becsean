<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AboutPolitique;

class AboutPolitiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutPolitique::create([
            'firstTitle'=>"Askano",
            'firstDescription'=>"Concrètement, Askano cherche à avoir un impact positif sur la société tout en demeurant économiquement viable. Il s’agit pour cela de mettre en place des pratiques vers ces objectifs.",
            'secondTitle' => 'Notre politique RSE ?',
            'secondDescription' => " <p  style='text-align: justify;'>Volontariste, notre stratégie permet de répondre à un fonctionnement plus transparent et respectueux de l’environnement. Elle est fondée sur trois piliers :</p>

                            <p style='text-align: justify;'>La prise en compte de la protection de l’environnement;</p>

                            <p style='text-align: justify;'>Le choix d’un modèle économique plus juste et plus efficace;</p>

                            <p style='text-align: justify;'>La valorisation des conditions de travail des salariés; </p>",
        ]);
    }
}
