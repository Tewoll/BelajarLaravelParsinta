<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

#[\Livewire\Attributes\Layout('layouts.guest')]

class Login extends Component
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required', 'password')]
    public string $password = '';
    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function render()
    {
        return view('livewire.login');
    }
}
