<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ModalRequest;


class ModalController extends Controller
{
    public function show(ModalRequest $request)
    {
        return view('livewire.modal-guided-tour.form');
    }

    public function create(ModalRequest $request)
    {
        return view('livewire.modal-guided-tour.form');
    }


    public function store(ModalRequest $request)
    {
        $validatedData = $request->validated();

        return redirect()->back()->with('success', 'Convidados incluídos com sucesso!');
    }

}
