<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ExhibitionController extends BaseModuleController
{
    protected $moduleName = 'exhibitions';

    protected $indexOptions = [
    ];

    protected $indexColumns = [
        'thumb' => [
            'thumb' => true,
            'variant' => [
                'role' => 'cover',
                'crop' => 'mobile',
            ],
            'sort' => false,
        ],
        'title' => [
            'title' => 'Título',
            'field' => 'title',
            'sort' => true,
        ],
        'publish_start_date' => [
            'title' => 'Data de publicação',
            'field' => 'publish_start_date',
            'sort' => true,
        ],

    ];
    
    
}
