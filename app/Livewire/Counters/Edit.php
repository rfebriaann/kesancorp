<?php

namespace App\Livewire\Counters;

use App\Models\Vision;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

class Edit extends Component
{
    public $id;
    public $vision;
    public $mission;

    #[Layout('layouts.app')]
    public function mount($id){
        $vision = Vision::find($id);
        $this->id = $vision->id;
        $this->vision = $vision->vision;
        $this->mission = $vision->mission;
    }

    public function update(){
        // $this->validate();
        $vision = Vision::find($this->id);

        $vision->update([
            'vision' => $this->vision,
            'mission' => $this->mission
        ]);
        session()->flash('message', 'Data Berhasil Diupdate.');
        return $this->redirect('/counter');
    }

    public function render()
    {
        return view('livewire.counters.edit');
    }
}
