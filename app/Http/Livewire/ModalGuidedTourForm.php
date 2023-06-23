<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ModalGuidedTourForm extends Component
{
    public $showModal = false;
    public $name;
    public $email;

    public function render()
    {
        return view('livewire.modal-guided-tour-form');
    }

    public function openModal()
    {
        $this->reset(['name', 'email']);
        $this->showModal = true;
    }

    public function closeModal()
    {
        $this->showModal = false;
    }

    public function submitForm()
    {
        //salvar os dados
        //fechar o modal
        $this->closeModal();
    }
}
