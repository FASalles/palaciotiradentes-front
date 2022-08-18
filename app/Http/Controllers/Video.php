<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\VideoRepository;


class Video extends BaseController
{
    private $videoRepository;

    public function __construct(VideoRepository $videoRepository)
    {
        $this->videoRepository = $videoRepository;
    }

    public function index()
    {
        return view('videos.index')->with(['videos' => $this->videoRepository->allPublished()]);
    }

    public function show($slug)
    {
        return view('videos.show')->with(['video' => app(VideoRepository::class)->ForSlug($slug)]);
    }
}
