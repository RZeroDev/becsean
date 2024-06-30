<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Blé biologique',
                'slug' => Str::slug('Blé biologique'),
                'main_image' => 'storage/front/assets/img/product/4.jpg',
                'description' => 'Blé cultivé biologiquement, riche en nutriments et sans pesticides.',
                'status' => true,
                'product_categorie_id' => 1
            ],
            [
                'title' => 'Carottes fraîches',
                'slug' => Str::slug('Carottes fraîches'),
                'main_image' => 'storage/front/assets/img/product/1.jpg',
                'description' => 'Carottes croquantes et juteuses, cultivées localement.',
                'status' => true,
                'product_categorie_id' => 2
            ],
            [
                'title' => 'Pommes bio',
                'slug' => Str::slug('Pommes bio'),
                'main_image' => 'storage/front/assets/img/product/2.jpg',
                'description' => 'Pommes sucrées et croquantes, sans produits chimiques.',
                'status' => true,
                'product_categorie_id' => 2
            ],
            [
                'title' => 'Lait cru',
                'slug' => Str::slug('Lait cru'),
                'main_image' => 'storage/front/assets/img/product/3.jpg',
                'description' => 'Lait frais directement de la ferme, riche en nutriments.',
                'status' => true,
                'product_categorie_id' =>1
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
