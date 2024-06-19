<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;
use App\Helpers\FrontHelper;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'fullname' => "Lorem Ipsum 1",
            'slug'=>'lorem',
            'job' => "Cultivateur de fruits",
            'description' => "La réalisation de mon projet agricole a été un véritable succès grâce à leur accompagnement complet. De l'acquisition du terrain à la mise en place des infrastructures, ils ont été présents à chaque étape. Leur approche personnalisée et leur professionnalisme m'ont vraiment impressionnée.",
            'image' => 'storage/front/assets/img/icon/1.png',
        ]);

        Testimonial::create([
            'fullname' => "Lorem Ipsum 2",
            'slug'=>'marc-l',
            'job' => "Productrice de légumes",
            'description' => "Leur service de conseil agricole et de suivi technique a transformé ma manière de travailler. Les formations continues et les conseils en fertilisation et gestion de l'eau ont fait une énorme différence dans la santé et la productivité de mes cultures.",
            'image' => 'storage/front/assets/img/icon/2.png',
        ]);

        Testimonial::create([
            'fullname' => "Lorem Ipsum 3",
            'slug'=>'laura-M',
            'job' => "Agriculteur de blé bio",
            'description' => "Grâce à leurs conseils et leur suivi technique, j'ai pu optimiser mes pratiques agricoles et augmenter significativement mes rendements. Leur expertise en sélection de cultures et gestion des ressources a été inestimable pour la réussite de mon exploitation. ",
            'image' => 'storage/front/assets/img/icon/3.png',
        ]);
    }
}
