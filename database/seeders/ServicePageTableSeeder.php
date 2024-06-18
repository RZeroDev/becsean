<?php

namespace Database\Seeders;

use App\Models\ServicePage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServicePage::create([
            'title'=>"Nos services",
            'secondTitle'=>"Explorez nos services de pointe",
        ]);
    }
}
