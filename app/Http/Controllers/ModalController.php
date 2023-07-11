<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ModalRequest;


class ModalController extends Controller
{
    public function index(ModalRequest $request)
    {
        return view('livewire.modal-guided-tour.form');
    }

    public function create(ModalRequest $request)
    {
        return view('livewire.modal-guided-tour.form');
    }

    public function store(ModalRequest $request)
    {
        return view('livewire.modal-guided-tour.form');
    }
}
