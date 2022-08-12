<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Repositories\ClippingRepository;

class Clipping extends BaseController
{
    private $clippingRepository;

    public function __construct(ClippingRepository $clippingRepository)
    {
        $this->clippingRepository = $clippingRepository;
    }

    public function index()
    {
        return view('clippings.index')->with(['clippings' => $this->clippingRepository->allPublished()]);
    }

    public function show($slug)
    {
        return view('clippings.show')->with(['clipping' => app(ClippingRepository::class)->ForSlug($slug)]);
    }
}
