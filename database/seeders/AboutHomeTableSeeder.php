<?php

namespace Database\Seeders;

use App\Helpers\FrontHelper;
use App\Models\AboutHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutHomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutHome::create([
            'title'=>"À propos",
            'secondTitle'=>"Askano",
            'actionText'=>"Découvrir plus",
            'image'=>FrontHelper::getEnvFolder().'storage/front/assets/img/software-company/about.png',
            'shape'=>FrontHelper::getEnvFolder().'storage/front/assets/img/software-company/ab-shape.png',
            'firstDescription'=>"Avec une approche centrée sur le client et une passion pour l'innovation, nous nous engageons à fournir des solutions sur mesure qui dépassent vos attentes. Notre équipe dynamique est composée d'experts créatifs, stratèges marketing et développeurs web, travaillant de concert pour réaliser vos objectifs. Chez nous, chaque projet est une opportunité de créer quelque chose de remarquable. Faites équipe avec nous et ensemble, faisons briller votre entreprise dans le monde numérique. Notre mission ? Vous aider à briller dans un monde numérique en constante évolution.Fort de 20 ans d’expérience et l’envie de vous accompagner et de vous aider à réaliser vos projets. Qu’il s’agisse de communication digitale, print, photos & vidéos ou encore la création d’objets & de textiles personnalisé. ",
            'secondDescription'=>"Concrètement, Askano cherche à avoir un impact positif sur la société tout en demeurant économiquement viable. Il s’agit pour cela de mettre en place des pratiques vers ces objectifs.",
        ]);
    }
}
