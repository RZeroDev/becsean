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
            'title'=> 'Nouveau partenariat avec une entreprise de renom',
            'slug'=> Str::slug('Nouveau partenariat avec une entreprise de renom'),
            'description'=> "Nous sommes ravis d'annoncer notre collaboration avec Twof Technologies. Ensemble, nous allons repousser les limites de la communication digitale !",
            'image' => 'storage/front/assets/img/blogs/a1.jpg',
        ]);

        Actuality::create([
            'title'=> ' Lancement d\'une campagne de marketing viral',
            'slug'=> Str::slug(' Lancement d\'une campagne de marketing viral'),
            'description'=> "Notre dernière campagne de marketing viral est en ligne ! Découvrez comment nous captivons les audiences et générons un engagement massif pour nos clients.",
            'image' => 'storage/front/assets/img/blogs/a2.jpg',
        ]);

        Actuality::create([
            'title'=> 'Conférence sur les tendances du marketing digital',
            'slug'=> Str::slug('Conférence sur les tendances du marketing digital'),
            'description'=> "Rejoignez-nous lors de notre prochaine conférence pour découvrir les dernières tendances du marketing digital. Une occasion unique d'apprendre et de réseauter !",
            'image' => 'storage/front/assets/img/blogs/a3.jpg',
        ]);

        Actuality::create([
            'title'=> 'Tout savoir sur Askano en une vidéo',
            'slug'=> Str::slug('Tout savoir sur Askano en une vidéo'),
            'description'=> "Concrètement, Askano cherche à avoir un impact positif sur la société tout en demeurant économiquement viable. Il s’agit pour cela de mettre en place des pratiques vers ces objectifs.",
            'video' => 'https://www.youtube.com/embed/IQzW43SuVF8',
        ]);
    }
}
