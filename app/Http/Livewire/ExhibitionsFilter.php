<?php

namespace App\Http\Livewire;

use App\Models\Exhibition;
use Livewire\Component;
use Carbon\Carbon;

class ExhibitionsFilter extends Component
{
    public $month;
    public $year;

    protected $months;
    protected $years;


    public $select = null;

    protected $queryString = [
        'select' => []
    ];

    public function mount()
    {
        $this->loadDates();
    }

    public function updated()
    {
        $this->loadDates();
    }

    protected function loadDates()
    {
        $this->months = Exhibition::selectRaw("EXTRACT(MONTH FROM event_date) as month")
            ->distinct()
            ->orderBy('month')
            ->pluck('month')
            ->map(function ($month) {
                return [
                    'number' => $month,
                    'name' => Carbon::createFromDate(null, $month, null)->locale('pt_BR')->isoFormat('MMMM') // convert month number to name
                ];
            });

        $this->years = Exhibition::selectRaw("EXTRACT(YEAR FROM event_date) as year")
            ->distinct()
            ->orderBy('year')
            ->pluck('year');
    }


    public function render()
    {

        date_default_timezone_set('America/Sao_Paulo');

        $exhibitions = Exhibition::published()
            ->when($this->month, function ($query, $month) {
                return $query->whereRaw("EXTRACT(MONTH FROM event_date) = ?", [$month]);
            })
            ->when($this->year, function ($query, $year) {
                return $query->whereRaw("EXTRACT(YEAR FROM event_date) = ?", [$year]);
            })
            ->orderByDesc('event_date');

        return view('livewire.exhibitions-filter')->with([
            'exhibitions' => $exhibitions->get(),  'months' => $this->months,
            'years' => $this->years
        ]);
    }
}
