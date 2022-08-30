<?php

namespace App\Http\Livewire;

use App\Models\Exhibition;
use Livewire\Component;
use Carbon\Carbon;

class ExhibitionsFilter extends Component
{

    public $select = null;

    public function render()
    {
        
        date_default_timezone_set('America/Sao_Paulo');

        $exhibitions = Exhibition::published()->orderBy('publish_start_date');

        $exhibitions->when($this->select, function ($queryBuilder) {
            return $queryBuilder->where('event_date', $this->select == 'eventos_futuros' ? '>=' : '<', Carbon::now());
        });

        return view('livewire.exhibitions-filter')->with(['exhibitions' => $exhibitions->get()]);
    }
}
