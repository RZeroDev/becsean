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
            'title'=> 'Évaluation de la faisabilité agricole',
            'slug'=> Str::slug('Évaluation de la faisabilité agricole'),
            'description'=> "Nous analysons les conditions locales pour déterminer la viabilité de votre projet agricole.",
            'service_id' => 1,
        ]);

        UnderService::create([
            'title'=> 'Études pédologiques et climatologiques',
            'slug'=> Str::slug('Études pédologiques et climatologiques'),
            'description'=> "Nous effectuons des analyses du sol et du climat pour identifier les meilleures pratiques agricoles pour votre terrain.",
            'service_id' => 1,
        ]);

        UnderService::create([
            'title'=> 'Sélection des cultures adaptées',
            'slug'=> Str::slug('Sélection des cultures adaptées'),
            'description'=> "Nous vous aidons à choisir les cultures les plus adaptées à vos conditions spécifiques pour maximiser le rendement.",
            'service_id' => 1,
        ]);


        UnderService::create([
            'title'=> 'Analyse des marchés',
            'slug'=> Str::slug('Analyse des marchés'),
            'description'=> "Nous étudions les tendances du marché pour vous recommander les cultures les plus rentables.",
            'service_id' => 1,
        ]);

        UnderService::create([
            'title'=> 'Acquisition et appropriation foncière',
            'slug'=> Str::slug('Acquisition et appropriation foncière'),
            'description'=> "Nous vous aidons à sécuriser et à préparer le terrain pour votre projet agricole.",
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'Planification et aménagement du terrain',
            'slug'=> Str::slug('Planification et aménagement du terrain'),
            'description'=> "Nous élaborons des plans détaillés pour l'aménagement optimal de votre terrain agricole.",
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'Mise en place des infrastructures',
            'slug'=> Str::slug('Mise en place des infrastructures'),
            'description'=> "Nous installons les infrastructures nécessaires telles que les systèmes d'irrigation et les serres.",
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'Plantation et entretien des cultures',
            'slug'=> Str::slug('Plantation et entretien des cultures'),
            'description'=> "Nous gérons la plantation et l'entretien de vos cultures pour assurer une croissance saine et productive.",
            'service_id' => 2,
        ]);

        UnderService::create([
            'title'=> 'Conseils en agronomie et techniques culturales',
            'slug'=> Str::slug('Conseils en agronomie et techniques culturales'),
            'description'=> "Nos experts vous guident pour adopter les meilleures pratiques agricoles.",
            'service_id' => 3   ,
        ]);

        UnderService::create([
            'title'=> 'Gestion intégrée des ravageurs',
            'slug'=> Str::slug('Gestion intégrée des ravageurs'),
            'description'=> "Nous vous aidons à gérer efficacement les ravageurs pour protéger vos cultures.",
            'service_id' => 3,
        ]);

        UnderService::create([
            'title'=> 'Conseils en fertilisation et gestion de l\'eau',
            'slug'=> Str::slug('Conseils en fertilisation et gestion de l\'eau'),
            'description'=> "Nous vous conseillons sur les meilleures méthodes de fertilisation et de gestion de l'eau pour optimiser la croissance de vos cultures.",
            'service_id' => 3,
        ]);

        UnderService::create([
            'title'=> 'Formation continue',
            'slug'=> Str::slug('Formation continue'),
            'description'=> "Nous offrons des formations régulières pour vous tenir à jour des dernières innovations agricoles. ",
            'service_id' => 3,
        ]);

        UnderService::create([
            'title'=> 'Travaux de terrassement et nivellement',
            'slug'=> Str::slug('Travaux de terrassement et nivellement'),
            'description'=> "Nous préparons votre terrain pour une culture optimale en réalisant des travaux de terrassement et de nivellement.",
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'Construction de serres et structures agricoles',
            'slug'=> Str::slug('Construction de serres et structures agricoles'),
            'description'=> "Nous construisons des serres et autres structures pour protéger et améliorer vos cultures.",
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'Installation de systèmes d\'irrigation et de drainage',
            'slug'=> Str::slug('Installation de systèmes d\'irrigation et de drainage'),
            'description'=> "Nous mettons en place des systèmes d'irrigation et de drainage pour une gestion efficace de l'eau.",
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'Entretien et réparation des machines agricoles',
            'slug'=> Str::slug('Entretien et réparation des machines agricoles'),
            'description'=> "Nous assurons l'entretien et la réparation de vos équipements pour garantir leur performance continue.",
            'service_id' => 4,
        ]);

        UnderService::create([
            'title'=> 'Formations techniques en agronomie',
            'slug'=> Str::slug('Formations techniques en agronomie'),
            'description'=> "Nous offrons des formations approfondies sur les pratiques agronomiques et la gestion des cultures.",
            'service_id' => 5,
        ]);

        UnderService::create([
            'title'=> 'Ateliers sur les pratiques agricoles durables',
            'slug'=> Str::slug('Ateliers sur les pratiques agricoles durables'),
            'description'=> "Nous organisons des ateliers pour vous enseigner les pratiques agricoles durables et responsables.",
            'service_id' => 5,
        ]);

        UnderService::create([
            'title'=> 'Assistance dans les négociations foncières et commerciales',
            'slug'=> Str::slug('Assistance dans les négociations foncières et commerciales'),
            'description'=> "Nous vous aidons à négocier des accords fonciers et commerciaux avantageux pour votre exploitation.",
            'service_id' => 5,
        ]);

        UnderService::create([
            'title'=> 'Facilitation de partenariats et coopérations',
            'slug'=> Str::slug('Facilitation de partenariats et coopérations'),
            'description'=> "Nous vous assistons dans la création de partenariats et de coopérations inter-entreprises pour renforcer votre réseau.",
            'service_id' => 5,
        ]);

    }
}
