<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        sleep(1);
        return view('livewire.posts.index');
    }
}
