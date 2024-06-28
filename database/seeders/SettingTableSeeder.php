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
                'company_phone' => '+229 67 95 71 32',
                'company_email' => 'contact@becseansarl.com',
                'company_headquarters' => "Benin - Porto-Novo",
                'company_facebook' => '',
                'company_twitter' => '',
                'company_instagram' => '',
                'company_tiktok' => '',
                'company_youtube' => '',
            ]
        ]);
    }
}
