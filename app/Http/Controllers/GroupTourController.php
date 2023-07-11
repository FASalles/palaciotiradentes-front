<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Admin\GroupTourRequest;


class GroupTourController extends BaseController
{
    public function index()
    {
        return view('guided-group-tour.index');
    }

    public function store(GroupTourRequest $request)
    {
//        return view('guided-group-tour.index');
    }
}
