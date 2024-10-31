<?php

namespace App\Livewire\Admin\Positions;

use App\Models\Position;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
     use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $name = '';

    public function store()
    {
        $this->validate();
         Position::create([
            'name' => $this->name,
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.positions.index');
    }
    
    public function render()
    {
        return view('livewire.admin.positions.create');
    }
}
