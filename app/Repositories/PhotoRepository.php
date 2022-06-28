<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Photo;

class PhotoRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions;

    public function __construct(Photo $model)
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
