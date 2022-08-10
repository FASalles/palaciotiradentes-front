<?php

namespace App\Twill\Capsules\Posts\Repositories;

use A17\Twill\Models\Feature;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\ModuleRepository;
use App\Twill\Capsules\Posts\Models\Post;

class PostRepository extends ModuleRepository
{
    use HandleSlugs, HandleMedias, HandleRevisions;

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

    public function featured()
    {
        return Feature::orderBy('position')->forBucket('posts_feature');
    }
}
