<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;
use Illuminate\Support\Str;
use App\Helpers\FrontHelper;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name'=> 'Alatis',
            'slug'=> Str::slug('Alatis'),
            'logo' => 'storage/front/assets/img/brand/1.png',
        ]);

        Partner::create([
            'name'=> 'AmpVisual',
            'slug'=> Str::slug('AmpVisual'),
            'logo' => 'storage/front/assets/img/brand/2.png',
        ]);

        Partner::create([
            'name'=> 'IxiLive',
            'slug'=> Str::slug('IxiLive'),
            'logo' => 'storage/front/assets/img/brand/3.png',
        ]);

        Partner::create([
            'name'=> 'KapElse',
            'slug'=> Str::slug('KapElse'),
            'logo' => 'storage/front/assets/img/brand/4.png',
        ]);

        Partner::create([
            'name'=> 'letsee',
            'slug'=> Str::slug('letsee'),
            'logo' => 'storage/front/assets/img/brand/5.png',
        ]);

        
    }
}
