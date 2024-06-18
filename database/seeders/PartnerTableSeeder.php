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
            'logo' => 'storage/front/assets/img/partners/p1.png',
        ]);

        Partner::create([
            'name'=> 'AmpVisual',
            'slug'=> Str::slug('AmpVisual'),
            'logo' => 'storage/front/assets/img/partners/p2.png',
        ]);

        Partner::create([
            'name'=> 'IxiLive',
            'slug'=> Str::slug('IxiLive'),
            'logo' => 'storage/front/assets/img/partners/p3.png',
        ]);

        Partner::create([
            'name'=> 'KapElse',
            'slug'=> Str::slug('KapElse'),
            'logo' => 'storage/front/assets/img/partners/p4.png',
        ]);

        Partner::create([
            'name'=> 'letsee',
            'slug'=> Str::slug('letsee'),
            'logo' => 'storage/front/assets/img/partners/p5.png',
        ]);

        Partner::create([
            'name'=> 'RolandGarros',
            'slug'=> Str::slug('RolandGarros'),
            'logo' => 'storage/front/assets/img/partners/p6.png',
        ]);

        Partner::create([
            'name'=> 'SC',
            'slug'=> Str::slug('SC'),
            'logo' => 'storage/front/assets/img/partners/p7.png',
        ]);

        Partner::create([
            'name'=> 'Soufflet',
            'slug'=> Str::slug('Soufflet'),
            'logo' => 'storage/front/assets/img/partners/p8.png',
        ]);

        Partner::create([
            'name'=> 'TotalEnergies',
            'slug'=> Str::slug('TotalEnergies'),
            'logo' => 'storage/front/assets/img/partners/p9.png',
        ]);

        Partner::create([
            'name'=> 'Vannina',
            'slug'=> Str::slug('Vannina'),
            'logo' => 'storage/front/assets/img/partners/p10.png',
        ]);

        Partner::create([
            'name'=> 'Rexecutive',
            'slug'=> Str::slug('Rexecutive'),
            'logo' => 'storage/front/assets/img/partners/p11.png',
        ]);

        Partner::create([
            'name'=> 'Copine',
            'slug'=> Str::slug('Copine'),
            'logo' => 'storage/front/assets/img/partners/p12.png',
        ]);
    }
}
