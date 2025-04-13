<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Game;

class Searcher extends Component
{
    public $search = '';

    public function render()
    {
        $results = [];

        if (strlen($this->search) >= 1) {
            $results = Game::where('title', 'like', "%" . $this->search . "%")->get();
        }

        return view('livewire.searcher', compact('results'));
    }
}
