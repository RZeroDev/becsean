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
            'title'=> 'Étude des projets agricoles',
            'slug'=> Str::slug('Étude des projets agricoles'),
            'description'=> "Notre service d'étude des projets agricoles se concentre sur l'identification des domaines agricoles exploitables et la sélection des cultures les mieux adaptées à ces terrains. Nous réalisons des analyses approfondies pour garantir la réussite et la durabilité de vos projets agricoles.",
            'main_image' => 'storage/front/assets/img/services/s1.png',
        ]);

        Service::create([
            'title'=> 'Réalisation des projets agricoles',
            'slug'=> Str::slug('Réalisation des projets agricoles'),
            'description'=> "Nous vous accompagnons dans toutes les étapes de la réalisation de votre projet agricole, depuis l'acquisition du terrain jusqu'à la récolte. Notre expertise inclut la planification, l'aménagement du terrain, la plantation et la gestion des cultures.",
            'main_image' => 'storage/front/assets/img/services/s2.png',
        ]);

        Service::create([
            'title'=> 'Conseil agricole et suivi technique',
            'slug'=> Str::slug('Conseil agricole et suivi technique'),
            'description'=> "Nous offrons des conseils agricoles spécialisés et un suivi technique continu pour optimiser vos pratiques agricoles. Nos experts vous aident à améliorer vos techniques de culture, gérer les maladies et les parasites, et adopter des méthodes durables et innovantes.",
            'main_image' => 'storage/front/assets/img/services/s3.png',
        ]);

        Service::create([
            'title'=> 'Réalisation de divers travaux',
            'slug'=> Str::slug('Réalisation de divers travaux'),
            'description'=> "Notre service de réalisation de divers travaux agricoles et ruraux inclut l'aménagement des terres, la construction d'infrastructures agricoles et l'entretien des équipements. Nous améliorons l'efficacité et la productivité de votre exploitation agricole.",
            'main_image' => 'storage/front/assets/img/services/s4.png',
        ]);

        Service::create([
            'title'=> 'Formations et négociations',
            'slug'=> Str::slug('Formations et négociations'),
            'description'=> "Nous proposons des formations spécialisées pour les agriculteurs et les professionnels du secteur, ainsi que des services de négociation pour faciliter les transactions et partenariats. Nos formations couvrent divers aspects de l'agriculture moderne, et nos services de négociation vous aident à obtenir les meilleurs accords.",
            'main_image' => 'storage/front/assets/img/services/s4.png',
        ]);
    }
}
