<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title'=> 'Digital',
            'slug'=> Str::slug('Digital'),
            'description'=> "En passent par les réseaux sociaux, le web design, la réalité augementé ou encore l’amination 2D ou 3D, Pacifico sera être à la pointe de l’inovation.",
            'main_image' => 'storage/front/assets/img/services/s1.png',
        ]);

        Service::create([
            'title'=> 'Print',
            'slug'=> Str::slug('Print'),
            'description'=> "L’indentité visuel d’un projet est primorida. C’est pourquoi Pacifico communication vous offre la possibilité de créer la vôtre, sur-mesure.",
            'main_image' => 'storage/front/assets/img/services/s2.png',
        ]);

        Service::create([
            'title'=> 'Photos & vidéos',
            'slug'=> Str::slug('Photos & vidéos'),
            'description'=> "Passionné de photographie et de reportage, de Paris à Madagcascar nous vous accompagnerons dans n’importe quel projet.",
            'main_image' => 'storage/front/assets/img/services/s3.png',
        ]);

        Service::create([
            'title'=> 'Objets & textiles',
            'slug'=> Str::slug('Objets & textiles'),
            'description'=> "Objets ou vêtements personnalisé pour des séminaires, Team building ou l’envie d’avoir des goodies à l’éffigie de votre entreprise? Nous vous proposons une solution écoresponsable et respectueuse de l’environnement.",
            'main_image' => 'storage/front/assets/img/services/s4.png',
        ]);
    }
}
