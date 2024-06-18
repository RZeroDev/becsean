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
            'job' => "PDG, Société Monde Meilleur",
            'description' => "Grâce à l'équipe de cette agence, notre visibilité en ligne a explosé ! Des professionnels efficaces et à l'écoute. Merci à vous!",
            'image' => 'storage/front/assets/img/testimonials/tp-1.png',
        ]);

        Testimonial::create([
            'fullname' => "Lorem Ipsum 2",
            'slug'=>'marc-l',
            'job' => "PDG, Startup Innovation",
            'description' => "Des stratégies de marketing digital innovantes qui ont vraiment boosté notre entreprise. Une équipe talentueuse et professionnelle.",
            'image' => 'storage/front/assets/img/testimonials/tp-2.png',
        ]);

        Testimonial::create([
            'fullname' => "Lorem Ipsum 3",
            'slug'=>'laura-M',
            'job' => "PDG, World-Eco",
            'description' => "Une agence qui sait allier créativité et expertise technique. Des résultats tangibles et un accompagnement personnalisé.",
            'image' => 'storage/front/assets/img/testimonials/tp-3.png',
        ]);
    }
}
