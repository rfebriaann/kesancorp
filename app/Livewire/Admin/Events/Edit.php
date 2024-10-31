<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{

    #[Layout('layouts.admin')]

    public $id;
    #[Rule('required')]
    public $event_name = '';
    #[Rule('required')]
    public $event_date = '';
    #[Rule('required')]
    public $event_detail = '';
    #[Rule('required')]
    public $project_id = '';
    
    public function mount($id){
        $events = Event::find($id);
        $this->id = $events->id;
        $this->event_name = $events->event_name;
        $this->event_date = $events->event_date;
        $this->event_detail = $events->event_detail;
        $this->project_id = $events->project_id;
    }

    public function update(){
       $this->validate();

        //get post
        $events = Event::find($this->id);
        
        //update post
        $events->update([
            'event_name' => $this->event_name,
            'event_date' => $this->event_date,
            'event_detail' => $this->event_detail,
            'project_id' => $this->project_id,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.events.index');
    }


    public function render()
    {
        return view('livewire.admin.events.edit', [
            'projects' => Project::all()
        ]);
    }
}
