<?php

namespace App\Livewire\Admin\Teams;

use App\Models\Position;
use App\Models\Team;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]
    #[Rule('required')]
    public $name = '';
    #[Rule('required')]
    public $image;
    #[Rule('required')]
    public $position_id;

    public function store()
    {
        $this->validate();
        $this->image->storeAs('public/assets/team_images/', $this->image->hashName());
        Team::create([
            'name' => $this->name,
            'image' => $this->image->hashName(),
            'position_id' => $this->position_id,
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.teams.index');
    }
    
    public function render()
    {
        return view('livewire.admin.teams.create', [
            'positions' => Position::all()
        ]);
    }
}
