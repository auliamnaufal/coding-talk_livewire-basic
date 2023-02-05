<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Naufal';
    public $loud = false;

    public function render()
    {

        return view('livewire.hello-world');
    }
}
