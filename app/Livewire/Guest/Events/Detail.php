<?php

namespace App\Livewire\Guest\Events;

use App\Models\Event;
use App\Models\Photo;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Detail extends Component
{
    #[Layout('layouts.detail')]
    public $data;
    public $images;
    public $title;
    public $id;

    public function mount($id){
        $this->data = Event::find($id);
        $this->images = Photo::where('event_id', "=", $id)->get();
    }

    public function render()
    {
        return view('livewire.guest.events.detail');
    }
}
