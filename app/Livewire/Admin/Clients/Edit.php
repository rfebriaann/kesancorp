<?php

namespace App\Livewire\Admin\Clients;

use App\Models\Client;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Livewire\WithFileUploads;

class Edit extends Component
{   
    use WithFileUploads;
    #[Layout('layouts.admin')]

    public $id;
    #[Rule('required')]
    public $client_name;
    public $image;

    public function mount($id){
        $clients = Client::find($id);
        $this->id = $clients->id;
        $this->client_name = $clients->client_name;
        $this->image = $clients->image;
    }

    public function update(){
       $this->validate();

        //get post
        $clients = Client::find($this->id);
        if ($clients->image != $this->image) {

            //store image in storage/app/public/posts
            $this->image->storeAs('public/assets/clients_images/', $this->image->getClientOriginalName());

            //update post
            $clients->update([
                'client_name' => $this->client_name,
                'image' => $this->image->getClientOriginalName(),
            ]);
        } else {
            //update post
            $clients->update([
                'client_name' => $this->client_name,
            ]);
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('admin.clients.index');
    }

    public function render()
    {
        return view('livewire.admin.clients.edit');
    }
}
