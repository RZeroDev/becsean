<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emails')->insert([
            [
                'name' => 'contact@askano.fr',
                'slug' => Str::slug('contact@askano.fr'),
            ], 
        ]);
    }
}
