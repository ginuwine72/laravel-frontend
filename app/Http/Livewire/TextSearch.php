<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TextSearch extends Component
{
    public string $textSearch = '';

    public function __construct()
    {
    }

    public function search()
    {
        $users = User::where([
                    'name' => $this->textSearch,
                    'username' => $this->textSearch
                ])
                ->get();

        $this->emit('filter-users');
    }

    public function mount()
    {
    }

    public function render()
    {
        return view('livewire.text-search');
    }
}
