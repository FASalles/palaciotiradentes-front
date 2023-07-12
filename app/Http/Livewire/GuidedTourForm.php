<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuidedTourForm extends Component
{
    public $disability;
    public $showDisabilityType;

    public $country = 'Brasil';
    public $showUfCity;
    public $state;

    public $showState;
    public $city;
    public $showCity;

    public $email;
    public $emailConfirmation;

    protected $rules = [
        'email' => 'required|email',
        'emailConfirmation' => 'required|same:email',
    ];

    protected $messages = [
        'email.required' => 'O campo de e-mail é obrigatório.',
        'email.email' => 'O campo de e-mail deve conter um endereço válido.',
        'emailConfirmation.required' => 'O e-mail precisa ser igual ao e-mail de confirmação.',
        'emailConfirmation.email' => 'O campo de e-mail de confirmação deve conter um endereço válido.',
        'emailConfirmation.same' => 'O e-mail precisa ser igual ao e-mail de confirmação.',
    ];

    public function render()
    {

        $this->showDisabilityType = $this->disability == 'yes';

        $this->showUfCity = $this->country == 'Brasil';

        $this->showState = $this->state == 'RG';

        $this->showCity = $this->city == 'França';

        $this->showEmailConfirmation = $this->showEmailConfirmation = filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;

        return view('livewire.guided-tour-form', [
            'showDisabilityType' => $this->showDisabilityType,
            'showState' => $this->showState,
            'showUfCity' => $this->showUfCity,
            'showCity' => $this->showCity,
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}

