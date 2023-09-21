<?php

return [
    'mode' => 'utf-8',
    'format' => 'A4',
    'author' => '',
    'subject' => '',
    'keywords' => '',
    'creator' => 'Laravel Pdf',
    'display_mode' => 'fullpage',
    'tempDir' => base_path('storage/temp'),
    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        'fa' => [
            'R'  => 'Vazir.ttf',
            'B'  => 'Vazir-Bold.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],

     ]
];
