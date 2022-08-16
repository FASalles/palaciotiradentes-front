<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\PublicationRepository;


class Publication extends BaseController
{
    private $PublicationRepository;

    public function __construct(PublicationRepository $publicationRepository)
    {
        $this->publicationRepository = $publicationRepository;
    }

    public function index()
    {
        return view('publications.index')->with(['publications' => $this->publicationRepository->allPublished()]);
    }

    public function show($slug)
    {
        return view('publications.show')->with(['publication' => app(PublicationRepository::class)->ForSlug($slug)]);
    }

}
