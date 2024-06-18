<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DescriptionFooter;

class DescriptionFooterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DescriptionFooter::create([
            'note' => '5/5 Note globale',
            'description' => "Transformez votre présence en ligne et propulsez votre entreprise vers de nouveaux sommets avec notre expertise en communication et marketing digital.",
        ]);
    }
}
