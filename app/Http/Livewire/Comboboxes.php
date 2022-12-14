<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Comboboxes extends Component
{
    public $search = '';

    public $showList = false;

    public $users = [];

    public $user = [];

    public function boot()
    {
        $this->search = '';
        $this->users = User::all();
        $this->user = [];
    }

    public function selectUser($user = null)
    {
        $this->search = $user['name'];
        $this->user = $user;

        $this->users = User::all();

        $this->reset('showList');
    }

    public function updatedSearch()
    {
        $users = ! is_null($this->search)
            ? User::query()
                ->where(function($query) {
                    $query
                        ->where('name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%');
                })
                ->get()
            : [];

        $this->users = $users;

        $this->showList = ! $this->showList;

        $this->user = [];
    }

    public function render()
    {
        return view('livewire.comboboxes', [
            'users' => $this->users
        ]);
    }
}
