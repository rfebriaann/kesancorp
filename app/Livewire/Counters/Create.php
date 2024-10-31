<?php

namespace App\Livewire\Counters;

use App\Models\Vision;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;

class Create extends Component
{
    #[Validate('required')] 
    public $vision = '';
 
    #[Validate('required')] 
    public $mission = '';

    #[Layout('layouts.app')]

      public function save()
    {
        $this->validate(); 
 
        Vision::create(
            $this->only(['vision', 'mission'])
        );
 
        return $this->redirect('/counter');
    }

    public function render()
    {
        return view('livewire.counters.create');
    }
}
