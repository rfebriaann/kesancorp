<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Categories;
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

    public function store()
    {
        $this->validate();
         Categories::create([
            'name' => $this->name,
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.categories.index');
    }

    public function render()
    {
        return view('livewire.admin.categories.create');
    }
}
