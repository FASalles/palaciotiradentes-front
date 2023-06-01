<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Builder;

class PublicationRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleFiles, HandleRevisions;

    public function __construct(Publication $model)
    {
        $this->model = $model;
    }
    public function order(Builder $query, array $orders = []): Builder
    {
        $query->orderBy('publish_start_date', 'desc');
        return parent::order($query, $orders);
    }
    public function allPublished()
    {
        return $this->model
            ::published()
            ->orderby('position')
            ->get();
    }
}
