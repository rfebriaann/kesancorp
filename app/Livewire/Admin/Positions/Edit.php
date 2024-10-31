<?php

namespace App\Livewire\Admin\Positions;

use App\Models\Position;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.admin')]
    
    public $id;
    #[Rule('required')]
    public $name;

    public function mount($id){
        $positions = Position::find($id);
        $this->id = $positions->id;
        $this->name = $positions->name;
    }

    public function update(){
       $this->validate();

        //get post
        $events = Position::find($this->id);
        
        //update post
        $events->update([
            'name' => $this->name,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.positions.index');
    }

    public function render()
    {
        return view('livewire.admin.positions.edit');
    }
}
