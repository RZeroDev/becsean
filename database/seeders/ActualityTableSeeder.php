<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Actuality;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;

class ActualityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Actuality::create([
            'title'=> ' Du Terrain à la Récolte : Les Étapes Clés de la Réalisation d’un Projet Agricole',
            'slug'=> Str::slug(' Du Terrain à la Récolte : Les Étapes Clés de la Réalisation d’un Projet Agricole'),
            'description'=> "Un guide complet sur les étapes nécessaires pour transformer un terrain vierge en une exploitation agricole productive. De l'acquisition foncière à la mise en place des infrastructures et à la gestion des récoltes, explorez chaque phase critique pour garantir le succès de votre projet agricole.",
            'image' => 'storage/front/assets/img/blog/1.jpg',
            'actualities_categorie_id'=>1,
        ]);

        Actuality::create([
            'title'=> ' Maximiser le Potentiel de Vos Projets Agricoles : Étude et Sélection des Cultures',
            'slug'=> Str::slug(' Maximiser le Potentiel de Vos Projets Agricoles : Étude et Sélection des Cultures'),
            'description'=> "Découvrez l'importance d'une étude approfondie pour identifier les domaines agricoles exploitables et sélectionner les cultures les mieux adaptées. Apprenez comment l'évaluation de la faisabilité, les analyses pédologiques et climatologiques, et la sélection des cultures adaptées peuvent transformer votre terrain en un projet agricole prospère.",
            'actualities_categorie_id'=>2,
            'image' => 'storage/front/assets/img/blog/2.jpg',
        ]);

        Actuality::create([
            'title'=> ' Conseils et Suivi Technique : Optimiser Vos Pratiques Agricoles',
            'slug'=> Str::slug(' Conseils et Suivi Technique : Optimiser Vos Pratiques Agricoles'),
            'description'=> "Découvrez comment des conseils spécialisés et un suivi technique continu peuvent optimiser vos pratiques agricoles. Apprenez à améliorer vos techniques culturales, à gérer les ravageurs et à utiliser les ressources de manière efficace grâce à des conseils en fertilisation et gestion de l'eau, ainsi qu'à des formations continues.",
            'actualities_categorie_id'=>3,
            'image' => 'storage/front/assets/img/blog/3.jpg',
        ]);


    }
}
