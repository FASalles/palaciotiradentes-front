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

    public function render()
    {

        $this->showDisabilityType = $this->disability == 'yes';

        $this->showUfCity = $this->country == 'Brasil';

        $this->showState = $this->state == 'RG';

        $this->showCity = $this->city == 'França';

        return view('livewire.guided-tour-form', [
            'showDisabilityType' => $this->showDisabilityType,
            'showState' => $this->showState,
            'showUfCity' => $this->showUfCity,
            'showCity' => $this->showCity,
        ]);
    }
}

