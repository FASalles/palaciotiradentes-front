<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class PhotoController extends BaseModuleController
{
    protected $moduleName = 'photos';

    protected $indexOptions = [
        'reorder' => true,
    ];
    // Optional, specify the default listing order
    protected $defaultOrders = ['position' => 'asc'];

    protected $indexColumns = [
        'thumb' => [
            'thumb' => true,
            'variant' => [
                'role' => 'slideshow',
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

    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => true,
        'reorder' => true,
        'permalink' => true,
        'bulkEdit' => true,
        'editInModal' => false,
        'skipCreateModal' => false,
        // @todo(3.x): Default to true.
        'includeScheduledInList' => false,
    ];
}
