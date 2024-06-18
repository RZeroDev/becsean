<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;
use App\Helpers\FrontHelper;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'url' => 'storage/front/assets/img/services/s11.png',
            'service_id' => 1
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/services/s21.png',
            'service_id' => 2
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/services/s31.png',
            'service_id' => 3
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/services/s41.png',
            'service_id' => 4
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/blogs/blog-5.jpg',
            'actuality_id' => 1
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/blogs/blog-11.jpg',
            'actuality_id' => 2
        ]);

        Image::create([
            'url' => 'storage/front/assets/img/blogs/blog-7.jpg',
            'actuality_id' => 3
        ]);
    }
}
