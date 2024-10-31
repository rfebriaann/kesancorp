<?php

namespace App\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    #[Layout('layouts.admin')]

    #[Rule('required')]
    public $client_name = '';
    #[Rule('required')]
    public $image;

    public function store()
    {
        $this->validate();
        $this->image->storeAs('public/assets/clients_images/', $this->image->hashName());
         Client::create([
            'client_name' => $this->client_name,
            'image' => $this->image->hashName(),
        ]);
        session()->flash('message', 'Data Berhasil Disimpan.');
        return redirect()->route('admin.clients.index');
    }

    public function render()
    {
        return view('livewire.admin.clients.create');
    }
}
