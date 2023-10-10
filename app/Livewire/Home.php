<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home')]
class Home extends Component
{
    public function render()
    {
        // sleep(1);
        return view('livewire.home');
    }
}
