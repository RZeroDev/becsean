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
                'company_name' => 'Askano',
                'company_phone' => '+33 6 61 59 02 05',
                'company_email' => 'contact@askano.fr',
                'company_headquarters' => "6 rue Musset 75016, Paris",
                'company_facebook' => '',
                'company_twitter' => '',
                'company_instagram' => '',
                'company_tiktok' => '',
                'company_youtube' => '',
            ]
        ]);
    }
}
