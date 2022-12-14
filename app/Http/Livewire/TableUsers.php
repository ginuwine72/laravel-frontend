<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class TableUsers extends Component
{
    public $readyToLoad = true;

    public $users = [];

    public $search = '';

    public function mount()
    {
        return $this->users = User::all();
    }

    public function render()
    {
        $this->users = User::where('name', 'like', '%' . $this->search . '%')->get();

        return view('livewire.table-users', [
            'users' => $this->readyToLoad ? $this->users : []
        ]);
    }
}
