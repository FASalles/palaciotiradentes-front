<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\PhotoGalleryRepository;

class PhotoGallery extends BaseController
{
    private $photoGalleryRepository;

    public function __construct(PhotoGalleryRepository $photoGalleryRepository)
    {
        $this->photoGalleryRepository = $photoGalleryRepository;
    }

    public function index()
    {
        return view('.photos.index')->with(['photoGalleries' => $this->photoGalleryRepository->allPublished()->sortByDesc('publish_start_date'), ]);
    }
}
