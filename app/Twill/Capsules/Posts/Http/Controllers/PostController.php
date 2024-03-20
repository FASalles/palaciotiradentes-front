<?php

namespace App\Twill\Capsules\Posts\Http\Controllers;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';

    protected $indexOptions = [
    ];
    public function setUpController(): void
    {
        $this->enableShowImage();
    }

   /*  protected $defaultOrders = ['publish_start_date' => 'desc'];

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

    ]; */

}
