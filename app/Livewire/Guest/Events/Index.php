<?php

namespace App\Livewire\Guest\Events;

use App\Models\Event;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    #[Layout('layouts.page')] 
    // public $datas;
    // public $title;
    // public $id;
    public $search = '';
    public $perPage = 20;
    
    public function render()
    {
        return view('livewire.guest.events.index', [
            'events' => Event::search($this->search)->paginate($this->perPage)
        ]);
    }
}
