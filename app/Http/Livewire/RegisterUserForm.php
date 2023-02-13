<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterUserForm extends Component
{
    public $name;
    public $email;
    public $password;
 
    protected $rules = [
        'name' => 'required|min:3|max:50',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function registerUser()
    {
        $validatedData = $this->validate();
 
        User::create($validatedData);

        $this->emit('userCreated');

        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function render()
    {
        return view('livewire.register-user-form');
    }
}
