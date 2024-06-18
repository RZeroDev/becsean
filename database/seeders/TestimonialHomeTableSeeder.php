<?php

namespace Database\Seeders;

use App\Models\TestimonialHome;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialHomeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TestimonialHome::create([
            'title' => "Ce qu'ils disent de nous",
        ]);
    }
}
