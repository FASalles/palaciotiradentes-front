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
}
