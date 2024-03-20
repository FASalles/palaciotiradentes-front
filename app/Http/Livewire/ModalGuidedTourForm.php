<?php

namespace App\Http\Livewire;


use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Facades\Session;



class ModalGuidedTourForm extends Component
{
    public $disability;
    public $showDisabilityType;

    public $socialNameGuest;
    public $fullNameGuest;
    public $genderIdentityGuest;
    public $birthDateGuest;


    public $form = [];

    public $item = [];
    public $lista = ['Felipe'];


    public function addList()
    {
        array_push($this->lista, $this->item);
    }

    public function save()
    {
        $this->form = [
            'fullNameGuest' => $this->fullNameGuest,
            'birthDateGuest' => $this->birthDateGuest,
            'genderIdentityGuest' => $this->genderIdentityGuest,
            'disability' => $this->disability,
        ];


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
