<?php

namespace App\Livewire\Counters;

use App\Models\Vision;
use Livewire\Component;
use Livewire\Attributes\Layout;

class Index extends Component
{
     public $title = 'tambah data';
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.counters.index')->with([
            'visions' => Vision::all(),
            'title' => $this->title,
        ]);
    }
}
