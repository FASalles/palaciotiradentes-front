<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Validator;
use Livewire\Component;


class ModalGuidedTourForm extends Component
{
    public $disability;
    public $showDisabilityType;


    public $form = [];


    public function save()
    {
        Validator::make($this->form, [
            'fullNameGuest' => 'required',
            'birthDateGuest' => 'required',
            'genderIdentityGuest' => 'required',
            'disability' => 'required',
        ])->validate();
    }

    protected $rules = [
        'email' => 'required|email',
    ];

    protected $messages = [
        'fullNameGuest.request' => 'O campo Nome Completo é obrigatório',
        'birthDateGuest.request' => 'O campo Nome Completo é obrigatório',
        'genderIdentityGuest' => 'O campo Nome Completo é obrigatório',
        'disability' => 'O campo Nome Completo é obrigatório',
    ];

    public function render()
    {
        $this->showDisabilityType = $this->disability == 'yes';
        return view('livewire.modal-guided-tour-form');
    }

}
