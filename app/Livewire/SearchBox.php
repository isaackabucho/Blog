<?php

namespace App\Livewire;

use Livewire\Component;

use function Laravel\Prompts\search;

class SearchBox extends Component
{

    public $search = '';

    // Live search
    public function updatedSearch(){
        $this->dispatch('search', search: $this->search);
    }

    // Search Using a button
    public function update(){
        $this->dispatch('search', search: $this->search);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
