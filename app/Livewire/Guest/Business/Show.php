<?php

namespace App\Livewire\Guest\Business;

use App\Models\Busines;
use App\Models\Project;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{      
    #[Layout('layouts.page')]
    public $datas;
    public $title;
    public $id;

    public function mount($id){
        $this->datas = Project::where('busines_id', "=" ,$id)->get();
        $this->title = Busines::where('id', "=", $id)->first();
    }

    public function render()
    {
        return view('livewire.guest.business.show');
    }
}
