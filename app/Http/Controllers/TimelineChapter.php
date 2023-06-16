<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\TimelineChapterRepository;

class TimelineChapter extends BaseController
{
    private $timelineChapterRepository;

    public function __construct(TimelineChapterRepository $timelineChapterRepository)
    {
        $this->timelineChapterRepository = $timelineChapterRepository;
    }

    public function index()
    {
        return view('timeline.index')->with(['timelineChapters' => $this->timelineChapterRepository->allPublished()]);
    }
}
