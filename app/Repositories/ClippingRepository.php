<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleJsonRepeaters;
use A17\Twill\Repositories\ModuleRepository;
use App\Models\Clipping;
use Illuminate\Database\Eloquent\Builder;
class ClippingRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions, HandleJsonRepeaters;

    public function __construct(Clipping $model)
    {
        $this->model = $model;
    }

    protected $jsonRepeaters = ['clippings'];

    public function order(Builder $query, array $orders = []): Builder
    {
        $query->orderBy('publish_start_date', 'desc');
        return parent::order($query, $orders);
    }
    public function allPublished()
    {
        return $this->model
            ::published()
            ->orderByDesc('publish_start_date')
            ->get();
    }

    public function getClippings()
    {
        return $this->model
            ::published()
            ->orderBy('publish_start_date')
            ->select('clippings')
            ->get();
    }
}
