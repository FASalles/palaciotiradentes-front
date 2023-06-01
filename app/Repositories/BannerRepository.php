<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Banner;
use Illuminate\Database\Eloquent\Builder;

class BannerRepository extends ModuleRepository
{
    use HandleMedias, HandleRevisions;

    public function __construct(Banner $model)
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
