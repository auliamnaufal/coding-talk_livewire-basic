<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $name = 'Naufal';
    public $loud = false;
    public $greetings = ["Hello"];

    public function resetName($name = 'Chicko') {
        $this->name = $name;
    }

    public function render()
    {

        return view('livewire.hello-world');
    }
}
