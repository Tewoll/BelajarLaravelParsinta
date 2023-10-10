<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule(['required'])]
    public string $title ='';
    #[Rule(['required'])]
    public string $body ='';

    public function save()
    {
        $user = \App\Models\User::find(1);
        $validated = $this->validate();
        $user->posts()->create($validated);
        $this->reset();
    }
    public function render()
    {
        return view('livewire.posts.create');
    }
}
