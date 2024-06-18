<?php

use App\Helpers\FrontHelper;

return [
    'name' => 'Askano',
    'manifest' => [
        'name' => env('Askano', 'Askano'),
        'short_name' => 'Askano',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black',
        'icons' => [
            '72x72' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => 'storage/front/assets/img/logo-white.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => 'storage/front/assets/img/logo-white.png',
            '750x1334' => 'storage/front/assets/img/logo-white.png',
            '828x1792' => 'storage/front/assets/img/logo-white.png',
            '1125x2436' => 'storage/front/assets/img/logo-white.png',
            '1242x2208' => 'storage/front/assets/img/logo-white.png',
            '1242x2688' => 'storage/front/assets/img/logo-white.png',
            '1536x2048' => 'storage/front/assets/img/logo-white.png',
            '1668x2224' => 'storage/front/assets/img/logo-white.png',
            '1668x2388' => 'storage/front/assets/img/logo-white.png',
            '2048x2732' => 'storage/front/assets/img/logo-white.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Askano',
                'description' => 'Askano',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => 'storage/front/assets/img/logo-white.png',
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Askano',
                'description' => 'Askano',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
