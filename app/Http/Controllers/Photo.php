<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\PhotoRepository;

class Photo extends BaseController
{
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    public function index()
    {
        return view('photos.index')->with(['photos' => $this->photoRepository->allPublished()]);
    }

    public function show($slug)
    {
        return view('photos.show')->with(['photo' => app(PhotoRepository::class)->ForSlug($slug)]);
    }
}
