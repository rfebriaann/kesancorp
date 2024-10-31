<?php

namespace App\Livewire\Guest;

use App\Models\Busines;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Business extends Component
{
    #[Layout('layouts.page')]
    public function render()
    {
        return view('livewire.guest.business', [
            'business' => Busines::all()
        ]);
    }
}
