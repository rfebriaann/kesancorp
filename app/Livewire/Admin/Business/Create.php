<?php

namespace App\Livewire\Admin\Business;

use App\Models\Busines;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $business_name = '';
    #[Rule('required')]
    public $image;
    
    public function store()
    {
        $this->validate();
        $this->image->storeAs('public/assets/busines_images/', $this->image->hashName());
         Busines::create([
            'business_name' => $this->business_name,
            'image' => $this->image->hashName(),
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.business.index');
    }

    public function render()
    {
        return view('livewire.admin.business.create');
    }
}
