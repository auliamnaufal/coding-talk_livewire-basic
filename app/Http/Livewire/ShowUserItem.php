<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowUserItem extends Component
{
    public $name;
    public $email;


    public function render()
    {
        return view('livewire.show-user-item');
    }
}
