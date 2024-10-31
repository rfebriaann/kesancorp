<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $event_name = '';
    #[Rule('required')]
    public $event_date = '';
    #[Rule('required')]
    public $event_detail = '';
    #[Rule('required')]
    public $image;
    #[Rule('required')]
    public $project_id = '';

    public function store(){
        $this->validate();
        $this->image->storeAs('public/assets/event_images/', $this->image->hashName());
        Event::create([
            'event_name' => $this->event_name,
            'event_date' => $this->event_date,
            'event_detail' => $this->event_detail,
            'image' => $this->image->hashName(),
            'project_id' => $this->project_id,
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.events.index');
    }

    public function render()
    {
        return view('livewire.admin.events.create', [
            'projects' => Project::all()
        ]);
    }
}
