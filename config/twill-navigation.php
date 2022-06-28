<?php

return [
    'posts' => [
        'title' => 'Notícias',
        'module' => true,
    ],

    'photos' => [
        'title' => 'Galeria de fotos',
        'module' => true,
    ],

    'videos' => [
        'title' => 'Galeria de vídeos',
        'module' => true,
    ],

    'featured' => [
        'title' => 'Destaques',
        'route' => 'admin.featured.videos',
        'primary_navigation' => [
            'videos' => [
                'title' => 'Vídeos',
                'route' => 'admin.featured.videos',
            ],
            'posts' => [
                'title' => 'Notícias',
                'route' => 'admin.featured.posts',
            ],
        ],
    ],
];
