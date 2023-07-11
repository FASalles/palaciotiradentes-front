<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\IndividualTourRequest;


class IndividualTourController extends Controller
{
    public function index()
    {
        return view('guided-tour.index');
    }

    public function store(IndividualTourRequest $request)
    {

    }
}
