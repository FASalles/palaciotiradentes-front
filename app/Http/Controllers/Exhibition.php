<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\ExhibitionRepository;


class Exhibition extends BaseController
{
    private $exhibitionRepository;

    public function __construct(ExhibitionRepository $exhibitionRepository)
    {
        $this->exhibitionRepository = $exhibitionRepository;
    }

    public function index()
    {
        return view('exhibitions.index')->with(['exhibitions' => $this->exhibitionRepository->allPublished()]);
    }

    public function show($slug)
    {
        return view('exhibitions.show')->with(['exhibition' => app(ExhibitionRepository::class)->ForSlug($slug)]);
    }
}
