<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Counter extends Component
{
    public $title = 'tambah data';
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.counter')->with([
            'title' => $this->title,
        ]);
    }
}
