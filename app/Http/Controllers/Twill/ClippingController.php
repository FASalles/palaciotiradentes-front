<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class ClippingController extends BaseModuleController
{
    protected $moduleName = 'clippings';

    protected $indexOptions = [];

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
