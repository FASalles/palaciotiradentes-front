<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Banner;

class BannerRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions;

    public function __construct(Banner $model)
    {
        $this->model = $model;
    }

    public function allPublished()
    {
        return $this->model
            ::published()
            ->orderby('position')
            ->get();
    }
}
