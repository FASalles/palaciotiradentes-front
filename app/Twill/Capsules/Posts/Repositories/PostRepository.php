<?php

namespace App\Twill\Capsules\Posts\Repositories;

use A17\Twill\Models\Feature;
use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Posts\Models\Post;
use Illuminate\Database\Eloquent\Builder;

class PostRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions, HandleBlocks;

    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function allPosts()
    {
        return $this->model
            ->published()
            ->orderBy('publish_start_date')
            ->get();
    }

    public function order(Builder $query, array $orders = []): Builder
    {
        $query->orderBy('publish_start_date', 'desc');
        return parent::order($query, $orders);
    }

    public function featured()
    {
        return Feature::getForBucket('posts_feature');
    }
}
