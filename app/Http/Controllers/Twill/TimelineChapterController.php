<?php

namespace App\Http\Controllers\Twill;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class TimelineChapterController extends BaseModuleController
{
    protected $moduleName = 'timelineChapters';

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
