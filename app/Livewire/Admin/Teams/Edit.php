<?php

namespace App\Livewire\Admin\Teams;

use App\Models\Position;
use App\Models\Team;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{
    #[Layout('layouts.admin')]

    public $id;
    #[Rule('required')]
    public $name;
    #[Rule('required')]
    public $position_id;

    public function mount($id){
        $teams = Team::find($id);
        $this->id = $teams->id;
        $this->name = $teams->name;
        $this->position_id = $teams->position_id;
    }

    public function update(){
       $this->validate();

        //get post
        $teams = Team::find($this->id);
        
        //update post
        $teams->update([
            'name' => $this->name,
            'position_id' => $this->position_id,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.teams.index');
    }

    public function render()
    {
        return view('livewire.admin.teams.edit', [
            'positions' => Position::all()
        ]);
    }
}
