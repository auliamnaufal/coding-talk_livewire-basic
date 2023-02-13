<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class RegisterUserForm extends Component
{
    public $email;
    public $password;
 
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];
 
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
 
    public function saveContact()
    {
        $validatedData = $this->validate();
 
        User::create($validatedData);
    }

    public function render()
    {
        return view('livewire.register-user-form');
    }
}
