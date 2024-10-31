<?php

namespace App\Livewire\Guest\Events;

use App\Models\Event;
use App\Models\Project;
use Livewire\Component;
use Livewire\Attributes\Layout;


class Show extends Component
{
    #[Layout('layouts.page')]
    public $datas;
    public $title;
    public $id;

    public function mount($id){
        $this->datas = Event::where('project_id', "=" ,$id)->get();
        $this->title = Project::where('id', "=", $id)->first();
    }

    public function render()
    {
        return view('livewire.guest.events.show');
    }
}