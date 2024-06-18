<?php

namespace Database\Seeders;

use App\Helpers\FrontHelper;
use App\Models\Hero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HeroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hero::create([
            'title'=>"Innovateurs en communication digitale",
            'description'=>"Une agence de communication digitale créative et dynamique, dédiée à propulser votre présence en ligne vers de nouveaux sommets.",
            'actionText'=>"Nous contacter",
            'actionUrl' => route('contact'),   
            'image' => FrontHelper::getEnvFolder() . 'storage/front/assets/img/software-company/circle-shape-lg.png',
            'video' => FrontHelper::getEnvFolder() . 'storage/front/assets/pacifico.mp4',
        ]);
    }
}
