<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $users;

    protected $listeners = ['userCreated' => 'refreshList'];


    public function mount()
    {
        $this->users = User::all();
    }

    public function refreshList()
    {
        $this->users = User::all();
    }

    public function render()
    {
        return view('livewire.show-users');
    }
}
