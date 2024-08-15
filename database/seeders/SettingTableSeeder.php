<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'company_name' => 'Becsean Sarl',
                'company_phone' => '+22995094158',
                'company_phone1' => '+2299000000',
                'company_email' => 'becseansarl@gmail.com',
                'company_headquarters' => "Benin - Pobè, Maison SOTON",
                'company_facebook' => '',
                'company_twitter' => '',
                'company_instagram' => '',
                'company_tiktok' => '',
                'company_youtube' => '',
            ]
        ]);
    }
}
