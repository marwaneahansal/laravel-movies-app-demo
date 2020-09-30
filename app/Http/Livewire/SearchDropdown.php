<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class SearchDropdown extends Component
{
    public $search = "";

    public function render()
    {
        $API_URI = 'https://api.themoviedb.org/3';
        $searchResults = [];

        
        if(strlen($this->search) > 2) {
            $searchResults = Http::withToken(config('services.tmdb.token'))
            ->get($API_URI.'/search/multi?query='.$this->search)
            ->json()['results'];
        }
    

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(4),
        ]);
    }
}
