<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Techniques de culture durable',
                'slug' => Str::slug('Techniques de culture durable'),
                'main_image' => 'storage/front/assets/img/blog/1.jpg',
                'description' => 'Mise en œuvre de techniques de culture durable pour améliorer le rendement des cultures et la santé des sols.',
                'status' => true,
                'project_categorie_id' => 1
            ],
            [
                'title' => 'Élevage biologique',
                'slug' => Str::slug('Élevage biologique'),
                'main_image' => 'storage/front/assets/img/blog/5.jpg',
                'description' => 'Élever du bétail de manière biologique pour produire des produits laitiers et carnés plus sains.',
                'status' => true,
                'project_categorie_id' => 2
            ],
            [
                'title' => 'Intégration de l’agroforesterie',
                'slug' => Str::slug('Intégration de l’agroforesterie'),
                'main_image' => 'storage/front/assets/img/blog/6.jpg',
                'description' => 'Intégrer des arbres dans les paysages agricoles pour de meilleurs résultats environnementaux et économiques.',
                'status' => true,
                'project_categorie_id' =>1
            ],
            [
                'title' => 'Pratiques aquacoles durables',
                'slug' => Str::slug('Pratiques aquacoles durables'),
                'main_image' => 'storage/front/assets/img/blog/4.jpg',
                'description' => 'Promouvoir des pratiques aquacoles durables pour garantir la santé à long terme des écosystèmes aquatiques.',
                'status' => true,
                'project_categorie_id' => 3
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
