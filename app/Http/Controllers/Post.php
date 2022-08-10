<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Twill\Capsules\Posts\Repositories\PostRepository;


class Post extends BaseController
{
    private $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        return view('posts.index')->with(['posts' => $this->postRepository->allPosts()->sortByDesc('publish_start_date'), 'featuredPosts' => app(PostRepository::class)->featured()]);
    }

    public function show($slug)
    {
        return view('posts.show')->with(['post' => app(PostRepository::class)->ForSlug($slug)]);
    }
}
