<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Validator;
use Livewire\Component;


class ModalGuidedTourForm extends Component
{
    public $disability;
    public $showDisabilityType;

    public $socialNameGuest;
    public $fullNameGuest;
    public $genderIdentityGuest;
    public $birthDateGuest;


    public $form = [];


    public function save()
    {
        $messages = [
            'required' => 'Esse campo é obrigatório',
        ];

        Validator::make($this->form, $this->rules, $messages)->validate();
    }

    protected $rules = [
        'fullNameGuest' => 'required',
        'birthDateGuest' => 'required',
        'genderIdentityGuest' => 'required',
        'disability' => 'required',
    ];

    public function render()
    {
        $this->showDisabilityType = $this->disability == 'yes';
        return view('livewire.modal-guided-tour-form');
    }

}
