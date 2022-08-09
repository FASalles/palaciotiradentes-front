<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\VideoRepository;
use App\Twill\Capsules\Posts\Repositories\PostRepository;
use App\Repositories\BannerRepository;
use App\Twill\Capsules\Posts\Models\Post as PostModel;

class Home extends BaseController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('home.index')->with(['posts' => $this->postRepository->allPosts()->sortByDesc('publish_start_date'), 'featuredVideos' => app(VideoRepository::class)->featured(), 'banners', app(BannerRepository::class)->allPublished()]);
    }
}
