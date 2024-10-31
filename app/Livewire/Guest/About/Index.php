<?php

namespace App\Livewire\Guest\About;

use App\Models\Team;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Index extends Component
{
    #[Layout('layouts.page')]
    public function render()
    {
        return view('livewire.guest.about.index', [
            'teams' => Team::where('position_id', 1)->orWhere('position_id', 2)->orWhere('position_id', 3)->get(),
            'allteams' => Team::all()
        ]);
    }
}
