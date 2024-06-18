<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UnderService;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;

class UnderServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UnderService::create([
            'title'=> 'RÉALITÉ AUGMENTÉE ANIMATION 2D-3D',
            'slug'=> Str::slug('RÉALITÉ AUGMENTÉE ANIMATION 2D-3D'),
            'description'=> "Storyboard, développement et programmation.",
            'image' => 'storage/front/assets/img/services/us11.png',
            'service_id' => 1,
        ]);

        UnderService::create([
            'title'=> 'COMMUNITY MANAGEMENT',
            'slug'=> Str::slug('COMMUNITY MANAGEMENT'),
            'description'=> "Gestion de vôtre communication digitale.",
            'image' => 'storage/front/assets/img/services/us12.png',
            'service_id' => 1,
        ]);

        UnderService::create([
            'title'=> 'WEB, SMARTPHONE ET TABLETTE',
            'slug'=> Str::slug('WEB, SMARTPHONE ET TABLETTE'),
            'description'=> "Nous vous assurons la compatibilité de vos projets sur n’importe quelles surfaces.",
            'image' => 'storage/front/assets/img/services/us13.png',
            'service_id' => 1,
        ]);


        UnderService::create([
            'title'=> 'LA CRÉATION',
            'slug'=> Str::slug('LA CRÉATION'),
            'description'=> "Direction artistique, studio et retouches.",
            'image' => 'storage/front/assets/img/services/us41.png',
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'LA RÉALISATION',
            'slug'=> Str::slug('LA RÉALISATION'),
            'description'=> "Nous faisons le maximum pour réduire notre impact environnemental.",
            'image' => 'storage/front/assets/img/services/us22.png',
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'L’IMPRESSION',
            'slug'=> Str::slug('L’IMPRESSION'),
            'description'=> "La concrétisation de votre projet.",
            'image' => 'storage/front/assets/img/services/us23.png',
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'PHOTOGRAPHIE',
            'slug'=> Str::slug('PHOTOGRAPHIE'),
            'description'=> "Direction artistique, studio et retouches.",
            'image' => 'storage/front/assets/img/services/us31.png',
            'service_id' => 3,
        ]);

        UnderService::create([
            'title'=> 'VIDÉOS & DOCUMENTAIRES',
            'slug'=> Str::slug('VIDÉOS & DOCUMENTAIRES'),
            'description'=> "Captation, interview, post-production et diffusion.",
            'image' => 'storage/front/assets/img/services/us32.png',
            'service_id' => 3,
        ]);

        UnderService::create([
            'title'=> 'CRÉATION',
            'slug'=> Str::slug('CRÉATION'),
            'description'=> "Conception, création et réalisation de votre image.",
            'image' => 'storage/front/assets/img/services/us41.png',
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'PRODUCTION',
            'slug'=> Str::slug('PRODUCTION'),
            'description'=> "Objets recyclabes et textiles bio.",
            'image' => 'storage/front/assets/img/services/us42.png',
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'IMPRESSION',
            'slug'=> Str::slug('IMPRESSION'),
            'description'=> "La concrétisation de votre projet.",
            'image' => 'storage/front/assets/img/services/us43.png',
            'service_id' => 4,
        ]);

    }
}
