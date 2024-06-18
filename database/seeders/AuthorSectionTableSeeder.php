<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AuthorSection;
use App\Helpers\FrontHelper;

class AuthorSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AuthorSection::create([
            'title' => 'Olivier Benghezal - CEO/Chef de projets',
            'description' => "De son sport favori, il a gardé le goût de la mêlée mais s‘il est un chef de meute sur un terrain de rugby, Olivier joue tout en finesse sur celui de la communication. Président de la société, il en est le pilier et le chef d’orchestre donnant à chacun sa partition et l’aidant à jouer dans le tempo. Les rapports humains ne sont pas nécessairement des rapport de forces.",
            'actionText' => 'Nous Contacter',
            'actionUrl' => route('contact'),
            'image' => FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/olivier.png',
            'shape' => FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/cta-shape.png',
        ]);
    }
}
