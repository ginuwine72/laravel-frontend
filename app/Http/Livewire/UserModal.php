<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserModal extends Component
{
    public $userId;

    public function mount()
    {
        $this->userId = auth()->user()->id;
    }

    public function getUserProperty()
    {
        return User::findOrFail($this->userId);
    }

    public function render()
    {
        return view('livewire.user-modal');
    }
}
