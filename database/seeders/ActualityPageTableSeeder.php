<?php

namespace Database\Seeders;

use App\Models\ActualitiesPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActualityPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ActualitiesPage::create([
            'title'=>"Nos actualités",
        ]);
    }
}
