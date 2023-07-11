<?php

namespace App\Http\Livewire;

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

    public function render()
    {
        $this->showDisabilityType = $this->disability == 'yes';

        $this->showUfCity = $this->country == 'Brasil';

        $this->showState = $this->state == 'RG';

        return view('livewire.guided-group-tour-form', [
            'showDisabilityType' => $this->showDisabilityType,
            'showState' => $this->showState,
            'showUfCity' => $this->showUfCity,
        ]);
    }
}

