<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class VideoController extends BaseModuleController
{
    protected $moduleName = 'videos';

    protected $indexOptions = [
        'reorder' => true,
    ];
    // Optional, specify the default listing order
    protected $defaultOrders = ['position' => 'asc'];
}
