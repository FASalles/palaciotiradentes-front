<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalGuidedTourForm extends Component
{
    public $disability;
    public $showDisabilityType;

    public $fullNameGuest;

    protected $rules = [
        'fullNameGuest' => 'required|min:6',
    ];

    public function submit()
    {
        $this->validateOnly('fullNameGuest');

//        $this->fullNameGuest = null;
    }

    public function render()
    {
        $this->showDisabilityType = $this->disability == 'yes';
        return view('livewire.modal-guided-tour-form');
    }
}
