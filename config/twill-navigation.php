<?php

return [

    'banners' => [
        'title' => 'Banners',
        'module' => true,
    ],

    'posts' => [
        'title' => 'Notícias',
        'module' => true,
    ],

    'exhibitions' => [
        'title' => 'Agenda cultural',
        'module' => true,
    ],

    'clippings' => [
        'title' => 'Na mídia',
        'module' => true,
    ],

    'publications' => [
        'title' => 'Publicações',
        'module' => true,
    ],

    'galleries' => [
        'title' => 'Galerias',
        'route' => 'admin.galleries.photos.index',
        'primary_navigation' => [
            'photos' => [
                'title' => 'Galeria de fotos',
                'module' => true,
            ],
            'videos' => [
                'title' => 'Galeria de vídeos',
                'module' => true,
            ],
        ],

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
