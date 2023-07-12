<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Http\Requests\Admin\GroupTourRequest;

class GuidedGroupTourForm extends Component
{

    public $disability;
    public $showDisabilityType;

    public $country;
    public $showUfCity;

    public $state;
    public $showState;

    public $fullName;

    public $email;
    public $emailConfirmation;

    public $form = [];

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

    public function save()
    {
        Validator::make($this->form, [
            'fullNameGuest' => 'required',
            'birthDateGuest' => 'required',
            'genderIdentityGuest' => 'required',
            'disability' => 'required',
        ])->validate();
    }

    public function render()
    {
        $this->showDisabilityType = $this->disability == 'yes';

        $this->showUfCity = $this->country == 'Brasil';

        $this->showState = $this->state == 'RG';

        $this->showEmailConfirmation = $this->showEmailConfirmation = filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;

        return view('livewire.guided-group-tour-form', [
            'showDisabilityType' => $this->showDisabilityType,
            'showState' => $this->showState,
            'showUfCity' => $this->showUfCity,
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
}

