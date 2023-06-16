<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\TimelineChapter;

class TimelineChapterRepository extends ModuleRepository
{
    use HandleMedias;

    public function __construct(TimelineChapter $model)
    {
        $this->model = $model;
    }

    public function allPublished()
    {
        return $this->model
            ::published()
            ->orderby('publish_start_date')
            ->get();
    }
}
