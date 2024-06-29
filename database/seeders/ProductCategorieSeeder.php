<?php

namespace Database\Seeders;

use App\Models\ProductCategorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategorie::create([
            'name'=>'Produits forestiers'
        ]);
        ProductCategorie::create([
            'name'=>'Produits tropicaux'
        ]);
        ProductCategorie::create([
            'name'=>'Produits agro-alimentaire'
        ]);
        ProductCategorie::create([
            'name'=>'Matériels et équipements'
        ]);
    }
}
