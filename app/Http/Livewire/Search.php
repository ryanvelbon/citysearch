<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Country;
use App\Models\State;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 1) {

            $results['countries'] = Country::where('name', 'LIKE', $this->search . '%')
                                        ->take(5)
                                        ->get();

            $results['states'] = State::where('name', 'LIKE', $this->search . '%')
                                        ->take(5)
                                        ->get()
                                        ->load('country');

            $results['cities'] = City::where('name', 'LIKE', $this->search . '%')
                                        ->take(5)
                                        ->get()
                                        ->load('country');
        }

        return view('livewire.search', [
            'results' => $results
        ]);
    }
}
